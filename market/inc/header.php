<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
?>
<?
@mysql_pconnect("mysql.hostinger.com.ua","u489640296_vtl","1234567");
mysql_select_db("u489640296_mark");
include 'inc/Engine.class.php';
$page=new Engine();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Photoshoot 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20110926

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?
					//$query="SELECT * FROM `pages` WHERE `url`='".str_replace('.php','',$_SERVER['REQUEST_URI'])."'";
					
?>
<meta name="keywords" content="<?=$page->page['keywords']?>" />
<meta name="description" content="<?=$page->page['description']?>" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?=$page->page['title']?></title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="jquery.poptrox-0.1.js"></script>
</head>
<body>
<div id="header" class="container">
	<div id="logo">
		<h1><a href="#">Мой магазин </a></h1>
		<p>Заходим  &nbsp;;)<a href="http://www.freecsstemplates.org"></a></p>
	</div>
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index.php">Главная</a></li>
			<li><a href="products.php">Товары</a></li>
			<li><a href="registration.php">Регистрация</a></li>
			<li><a href="login.php">Вход</a></li>
			<li><a href="cart.php">Корзина</a></li>
			<li><a href="index.php?contacts">Контакты</a></li><!-- Вызываем через GET запрос страницу contacts -->
			<!--Так можно все страницы вызывать через страницу index, либо через какую либо другую страницу используя GET запрос.Уменьшился код на одну страницу contacts.php-->
		</ul>
	</div>
</div>
<!-- end #header -->
<div id="poptrox">
	<!-- start -->
	<ul id="gallery">
		<li><a href="images/img01_big.jpg"><img src="images/img01.jpg" title="Phasellus nec erat sit amet nibh pellentesque congue." alt="" /></a></li>
		<li><a href="images/img02_big.jpg"><img src="images/img02.jpg" title="Phasellus nec erat sit amet nibh pellentesque congue." alt="" /></a></li>
		<li><a href="images/img03_big.jpg"><img src="images/img03.jpg" title="Phasellus nec erat sit amet nibh pellentesque congue." alt="" /></a></li>
		<li><a href="images/img04_big.jpg"><img src="images/img04.jpg" title="Phasellus nec erat sit amet nibh pellentesque congue." alt="" /></a></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
	<br class="clear" />
	<script type="text/javascript">
		$('#gallery').poptrox();
		</script>
	<!-- end -->
</div>	