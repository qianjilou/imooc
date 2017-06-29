
-- 创建数据库
create database `project7`;

-- 选择数据库
use `project7`;

-- 创建新闻表
create table `news`(
  `id` int not null primary key auto_increment,
  `title` varchar(100) not null comment '标题',
  `pic` varchar(255) not null  comment '封面图'
)charset=utf8;

-- 向新闻表中插入数据
insert into `news` values
(null, 'Spring Web Services 2.2.4 发布', 'images/1.gif'),
(null, 'Firefox 43 发布，增强隐私浏览', 'images/2.png'),
(null, 'MongoDB 3.0.8 发布', 'images/3.gif'),
(null, 'PureScript 0.8.0 rc1 发布，静态类型语言', 'images/4.png'),
(null, 'Plotly.js v1.2.1 发布，JavaScript 图表', 'images/5.gif'),
(null, 'Foundation 6.0.6 发布，Web 的 UI 框架', 'images/6.png'),
(null, 'Elasticsearch 1.7.4 发布，分布式搜索引擎', 'images/7.gif'),
(null, 'Google Chrome 47.0.2526.106 发布', 'images/8.png'),
(null, 'JetBrains 系更换全新 LOGO，开发驱动力', 'images/9.png'),
(null, '加班要么是你笨，要么是工作安排不合理', 'images/10.png'),
(null, 'Google 发布 Angular 2 Beta', 'images/1.gif'),
(null, '35 岁程序员的独家面试经历', 'images/2.png'),
(null, 'Windows 10 Redstone 首版完工：彻底抛弃 Win 7', 'images/3.gif'),
(null, '.NET 开源一年之后，社区的贡献占几成？', 'images/4.png'),
(null, 'ZUI 1.3 发布，性感无比的 HTML5 前端 UI 框架', 'images/5.gif'),
(null, 'MingGeJs 1.6 升级，挑战 JQUERY', 'images/6.png'),
(null, 'Elasticsearch 1.7.4 发布，分布式搜索引擎', 'images/7.gif'),
(null, 'Parsix GNU/Linux 8.5 Test 2 发布', 'images/8.png'),
(null, 'KDE 发布 Plasma 5.5.1，bug 修复版本', 'images/9.png'),
(null, 'Apache Solr 5.4.0 参考指南发布', 'images/10.png'),
(null, 'GitLab 8.3.0 rc1 发布，代码托管平台', 'images/1.gif'),
(null, 'BIND 9.10.3-P2 发布，DNS服务器软件', 'images/2.png');
