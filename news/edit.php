<?php
require './init.php';
//获取待查看的新闻ID
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$data = array('id' => $id);
//判断是否有表单提交
if($_POST){
    //接收表单数据
    $fields = array('title', 'content'); //保存待接收的字段
    foreach($fields as $v){
        $data[$v] = isset($_POST[$v]) ? trim(htmlspecialchars($_POST[$v])) : '';
    }
    $sql = 'update `news` set `title`=:title,`content`=:content where `id`=:id';
    $stmt = $pdo->prepare($sql);
    if(!$stmt->execute($data)){
        exit('执行失败：'.implode('-',$stmt->errorInfo()));
    }
    //修改成功后重定向到首页
    header("Location: index.php"); 
    exit;
}
//没有表单提交时，查询数据显示到表单中
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
require './view/edit.html';