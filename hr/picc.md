##Welcome to use MarkDown

![image](https://raw.githubusercontent.com/qianjilou/hr/master/2.jpg "百度图片")

##链接

###内嵌式链接
 -外部链接:[百度]

###引用式链接

##图片 demo

##引用块 demo

##代码块 demo
[代码块 demo]代码块 demo
``` javascript
$(function(){
	$("#btn").click(function(){  
			// $("#box").toggleClass( "show" );  
			if ( $("#box").hasClass( "show" ) ) {
				$("#box").removeClass( "show" );  
			}else {  
				$("#box").addClass( "show" );  
			}  
		});  
	});  
``` 

显示与隐藏
```javascript
$(function(){
		$("input").hover(function(){
			var index = $(this).index();
			$(this).addClass("active").siblings("input").removeClass("active");
			$("div:eq(" + index + ")").show().siblings("div").hide();
		});
	});

```
```css
	div {
		width: 200px;
		height: 200px;
		background: red;
		display: none;
	}
	.active {
		background: yellow;
	}

```

##图片 demo

[百度]:http:www.baidu.com
[代码块 demo]:pic.md#代码块 demo
