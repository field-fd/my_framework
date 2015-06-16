<?php
	header("Content-type:text/html;charset=utf-8");
	require_once('function.php');
	require_once('config.php');
	$view = ORG('Smarty/', 'Smarty',$viewconfig);
	$controller = filter($_GET['c']);  //控制器名
	$method = filter($_GET['m']);  //方法名
	C($controller, $method);
?>