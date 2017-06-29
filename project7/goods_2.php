<?php
//处理上传文件
if(isset($_FILES['image'])){
	$result = uploadImage($_FILES['image']);
	header('content-type:text/xml');
	echo '<?xml version="1.0" encoding="utf-8"?>';
	echo '<result>'.$result.'</result>';
}

function uploadImage($file){
	//判断是否上传成功
	if($file['error'] > 0){
		return '<flag>error</flag><message>图片上传失败</message>';
	}
	//获取上传文件的类型
	$type = strchr($file['name'],'.');
	if($type!=='.jpg'){
		return '<flag>error</flag><message>上传失败，只允许jpg扩展名</message>';
	}
	//生成新文件名
	$filename = substr(uniqid(rand()),-6).'.jpg';
	//上传文件保存路径
	$filepath = './uploads/'.$filename;
	if(move_uploaded_file($file['tmp_name'], $filepath)){
		return '<flag>ok</flag><message>'.$filepath.'</message>';
	}else{
		return '<flag>error</flag><message>图片上传失败</message>';
	}
}
