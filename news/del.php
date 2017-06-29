<?php
require './init.php';
//获取待查看的新闻ID
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$data = array('id' => $id);
$sql = 'delete from `news` where `id`=:id';
//执行SQL语句
$stmt = $pdo->prepare($sql);
if(!$stmt->execute($data)){
    exit('执行失败：'.implode('-',$stmt->errorInfo()));
}
//删除后重定向到首页
header('Location: index.php');
