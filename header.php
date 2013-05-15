<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>iOS 原型搭建系统</title>
	<link rel="stylesheet" href="./assets/reset.css">
	<link rel="stylesheet" href="./assets/index.css">
</head>
<body>
<div class="header clearfix">
	<div class="logo">
		<a href="#" title="iOS 原型搭建系统"></a>
	</div>
	<ul class="menu clearfix">
		<li class="item parent">
			<span class="explore">
				<a href="javascript:;">其他操作<s></s></a>
			</span>
			<ul class="submenu">
				<li><a href="?id={{page}}">页面信息设置</a></li>
				<li><a href="?id={{page}}">页面背景设置</a></li>
				<li><a href="?id={{page}}">发布皮肤文件</a></li>
				<li><a class="reselect" href="javascript:;">重新选择模板</a></li>
				<li><a href="#" target="_blank">意见反馈</a></li>
			</ul>
		</li>
		<li class="item">
			<span class="explore">
				<a href="?id={{page}}" target="_blank">预览</a>
			</span>
		</li>
		<li class="item">
			<span class="explore">
				<a href="javascript:;">保存</a>
			</span>
		</li>
		<li class="item">
			<span class="explore">
				<a href="?id={{page}}" target="_blank">发布</a>
			</span>
		</li>
	</ul>
</div>