## 响应式媒体查询  
常见属性

device-width,device-height



<link href = "./style/style.css" >


@media screen and (min-width:640px;){
     body{background:#FF0000;}
}

boostrap4 断点设置
>= 34*16 = 544px(手机横屏)
@medie (min-width:34em){...}

>= 48*16 = 768px(平板竖屏)
@medie (min-width:34em){...}

>= 62*16 = 992px(PC窄屏)
@medie (min-width:62em){...}

>= 75*16 = 1200px(PC宽屏)
@medie (min-width:75em){...}

>= 75*16 = 1200px(超大屏幕)
@medie (min-width:1380px){...}

![image](https://raw.githubusercontent.com/qianjilou/web/master/media/bts.jpg)

刚入前端，公司的新项目中打算引入bootstrap框架，最近学习bootstrap的时候，在栅格部分遇到了一些问题：
下图是bootstrap原生的栅格参数：

页面断点分别为768px，992px，1200px。
除了超小屏幕外，容器的宽度分别为750px、970px、1170px，此时单列宽度（容器宽度/12，即最小栅格宽度）分别为62.5px、80.8333...px、97.5px。
如此一来设计师连参考线都不好拉了，栅格中再次嵌套栅格更是噩梦。（跟设计师聊了一下，她对这样的设计方式有些排斥）
于是产生了疑问：bootstrap设计之初，为何不把容器宽度定为12的倍数（起码栅格不嵌套时都是整数像素）？还有768px、992px、1200px这样的断点设置和容器宽度设定是怎么考虑的？是不是有更合理的划分方式？（总不是拍脑袋决定的吧...这么牛X的框架...）
这样修改后是不是更合理些：
