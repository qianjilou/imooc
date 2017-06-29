<?php
//请将本脚本放到虚拟主机 www.test.com 中

//保存已经存在的商品编号
$snArr = array('sn01','sn02','sn03','sn04');

//接收验证参数
$action = isset($_GET['action']) ? $_GET['action'] : '';
//接收验证数据
$data = isset($_GET['data']) ? $_GET['data'] : '';

//处理验证
if($action=='checkSn'){
	if(in_array($data,$snArr)){
		$result = array('flag'=>'error','message'=>'该编号已经存在');
	}else{
		$result = array('flag'=>'ok','message'=>'填写正确');
	}
	//输出JSON结果
	if(isset($_GET["callback"])){
		echo $_GET["callback"].'('.json_encode($result).');'; 
	}else{
		echo json_encode($result);
	}
}
