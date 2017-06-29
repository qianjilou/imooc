
-- 为项目创建数据库
create database `project5`;

-- 选择数据库
use `project5`;

-- 创建新闻表
create table `news` (
  `id` int unsigned auto_increment primary key comment '新闻编号',
  `title` varchar(60) not null comment '新闻标题',
  `content` text not null comment '新闻内容',
  `addtime` timestamp default current_timestamp not null comment '发布时间'
)charset=utf8;

-- 插入测试数据

insert into `news` (`title`, `content`, `addtime`) values
('新闻标题1', '新闻内容1', '2015-10-09 17:07:58'),
('新闻标题2', '新闻内容2', '2015-10-11 12:06:56'),
('新闻标题3', '新闻内容3', '2015-11-11 10:05:08');

-- 查看测试数据

select * from `news` \G