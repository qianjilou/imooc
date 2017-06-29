<?php
	
 /**
  * 分页链接生成函数
  * @param int $page 当前访问的页码
  * @param int $total_page 总页数
  * @return string 拼接好的url地址
  */
function showPage($page,$total_page){ 	
	
	//拼接“首页”链接
	$html = '<a href="?page=1">【首页】</a>'; 
	
	//拼接“上一页”链接
	$pre_page = $page-1 <= 0 ? $page : ($page-1);
	$html .= '<a href="?page='.$pre_page.'">【上一页】</a>'; 
	
	//拼接“下一页”链接
	$next_page = $page+1 > $total_page ? $page : ($page+1);
	$html .= '<a href="?page='.$next_page.'">【下一页】</a>'; 
	
	//拼接“尾页”链接
	$html .= '<a href="?page='.$total_page.'">【尾页】</a>';
	
	//返回拼接后的分页链接
	return $html; 
}

//年龄计算（周岁）
function getAge($by,$bm,$bd){
	//获取当前时间的年份、月份和日期
	$cur_y = date('Y'); //4位数字完整表示的年份
	$cur_m = date('n'); //数字表示的月份，没有前导零,1~12
	$cur_d = date('j'); //月份中的第几天，没有前导零,1~31
	//计算学生从出生到当前年的周岁
	$age = $cur_y - $by;
	//判断学生是否已过生日
	if($cur_m < $bm || $cur_m==$bm && $cur_d<$bd){
		$age--;
	}
	return $age;
}

//获取星座
function getConst($bm,$bd){
	//如果学生的日期不是两位数，则自动补0
	if($bd < 10){
		$bd = '0'.$bd;
	}
	//将月与日拼接
	$date = "$bm.$bd";
	//定义保存星座图片名称的变量
	$lev = '';
	if($date >=1.21 && $date <= 2.19){
		$const = '水瓶座';
		$lev = 1;
	}elseif($date >=2.20 && $date <= 3.20){
		$const = '双鱼座';
		$lev = 2;
	}elseif($date >=3.21 && $date <= 4.20){
		$const = '白羊座';
		$lev = 3;
	}elseif($date >=4.21 && $date <= 5.21){
		$const = '金牛座';
		$lev = 4;
	}elseif($date >=5.22 && $date <= 6.21){
		$const = '双子座';
		$lev = 5;
	}elseif($date >=6.22 && $date <= 7.22){
		$const = '巨蟹座';
		$lev = 6;	
	}elseif($date >=7.23 && $date <= 8.23){
		$const = '狮子座';
		$lev = 7;
	}elseif($date >=8.24 && $date <= 9.23){
		$const = '处女座';
		$lev = 8;
	}elseif($date >=9.24 && $date <= 10.23){
		$const = '天秤座';
		$lev = 9;
	}elseif($date >=10.24 && $date <= 11.22){
		$const = '天蝎座';
		$lev = 10;
	}elseif($date >=11.23 && $date <= 12.21){
		$const = '射手座';
		$lev = 11;
	}else{
		$const = '魔羯座';
		$lev = 12;
	}
	return array($const,$lev);
}