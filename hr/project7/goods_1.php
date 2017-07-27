<?php

//保存已经存在的商品编号
$snArr = array('sn01','sn02','sn03','sn04');

//接收验证参数
$action = isset($_GET['action']) ? $_GET['action'] : '';
//接收验证数据
$data = isset($_GET['data']) ? $_GET['data'] : '';

//处理验证
if($action=='checkSn'){
	$xml = '<?xml version="1.0" encoding="utf-8"?>';
	if(in_array($data,$snArr)){
		$xml .= '<result><flag>error</flag><message>该编号已经存在</message></result>';
	}else{
		$xml .= '<result><flag>ok</flag><message>填写正确</message></result>';
	}
	//输出XML结果
	header('content-type:text/xml');
	echo $xml;
}

