<?php
//判断是否有表单提交
if($_POST){
    $data = array();  //保存接收的数据
    $fields = array('title', 'content'); //保存待接收的字段
    //从表单中获取指定字段，并调用函数进行过滤
    foreach($fields as $v){
        $data[$v] = isset($_POST[$v]) ? trim(htmlspecialchars($_POST[$v])) : '';
    }
    //连接数据库，执行SQL语句，失败时显示错误提示
    require './init.php';
    $sql = 'insert into `news`(`title`,`content`) values (:title,:content)';
    $stmt = $pdo->prepare($sql);
    if(!$stmt->execute($data)){
        exit('执行失败：'.implode('-',$stmt->errorInfo()));
    }
    //成功发表后重定向到首页
    header("Location: index.php"); 
    exit;
}
//没有表单提交时载入添加页面HTML模板
require './view/add.html';