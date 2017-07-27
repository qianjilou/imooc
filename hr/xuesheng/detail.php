<?php
/* 查看学生信息 */

//载入函数库
require './library/function.php';

//载入学生数据
$data = require './data.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

//检查指定查看的学生信息是否存在
if(!isset($data['student'][$id])){
	echo 'not found !';
}

//获取学生资料
$student = $data['student'][$id];
$name = $student['name'];       //姓名
$birth = $student['birth'];     //出生日期
$subject = $student['subject']; //所属学科
$snum = $student['snum'];       //学号

//分割字符串，获取学生出生的年、月、日
//list()用于接收索引数组，将数组元素依次保存到指定的变量中
list($stu_by,$stu_bm,$stu_bd) = explode('-',$birth);

//调用自定义的函数，获取年龄
$age = getAge($stu_by,$stu_bm,$stu_bd);

//获取学生星座，和星座代号
list($const,$lev) = getConst($stu_bm,$stu_bd);

//获取个性标签
$labels = explode(',',$student['label']);

//定义模板名称
$view = 'detail';
$title = '查看学生信息'; //定义页面标题
require './view/layout.html';
