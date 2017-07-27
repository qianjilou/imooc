<?php
require './init.php';
//获取待查看的新闻ID
$ids = isset($_POST['id']) ? $_POST['id'] : false;
if(!is_array($ids)){
	exit('删除失败：没有选择数据。');
}
//过滤输入数组
foreach($ids as $k=>$v){
	$ids[$k] = (int)$v;
}

//方式一：使用where批量删除

$sql = 'delete from `news` where id in ('.implode(',',$ids).')';
$pdo->query($sql);

//方式二：使用PDO批量处理
/*
$sql = 'delete from `news` where `id`=:id';
$stmt = $pdo->prepare($sql);
foreach($ids as $v){
	$stmt->execute(array('id'=>$v));
}
*/
//删除后重定向到首页
header('Location: index.php');
