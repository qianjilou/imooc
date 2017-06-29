<?php
require './init.php';
//获取待查看的新闻ID
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$data = array('id' => $id);
//根据ID到数据库中查询数据
$sql = 'select `title`,`content`,`addtime` from `news` where id=:id';
//执行SQL语句
$stmt = $pdo->prepare($sql);
if(!$stmt->execute($data)){
    exit('执行失败：'.implode('-',$stmt->errorInfo()));
}
//处理结果集
$data = $stmt->fetch(PDO::FETCH_ASSOC); 
//如果$data为空数组，表示没有查询到数据，即新闻不存在
if(empty($data)){
    exit('新闻ID不存在');
}
//新闻内容是来自<textarea>的数据，需要进行换行符转换
$data['content'] = nl2br($data['content']);
require './view/show.html';