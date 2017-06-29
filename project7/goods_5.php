<?php
 header('Content-Type:text/html;charset=utf-8');
//载入富文本过滤器
require './HTMLPurifier/HTMLPurifier.standalone.php';
//实例化过滤器
$Purifier = new HTMLPurifier();
//获取提交的数据
$html = isset($_POST['description']) ? $_POST['description'] : '';
//输出过滤结果
echo $Purifier->purify($html);
