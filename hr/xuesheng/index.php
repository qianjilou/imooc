<?php
/* 学生管理系统 首页（学生列表） */

//载入函数库
require './library/function.php';

//载入学生数据
$data = require './data.php';
$info = $data['student'];

//页码处理
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1; //获取当前页
$perpage = 4; //每页显示的条数
$total_num = count($info); //总记录数
$total_page = ceil($total_num/$perpage); //计算总页数

//对获取的当前页进行合理性判断
$page = max($page,1); //判断当前页是否小于1
$page = min($page,$total_page); //判断当前页码数是否大于总页数

//获取遍历学生数组时，每页开始的数组坐标值
$start_index = $perpage * ($page-1);
//获取遍历学生数组时，每页最大的数组坐标值
$end_index = $perpage * $page-1;
//防止计算结果超过最大记录数
$end_index = min($end_index,$total_num-1);

//载入模板
$view = 'list'; //定义模板名称
$title = '学生信息管理系统'; //定义页面标题
require './view/layout.html'; //载入页面布局