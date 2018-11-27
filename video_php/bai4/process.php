<?php 
	$useName = $_REQUEST["login"];
	$passWord = $_POST["pass"];	
	$result=($useName=='tuan' && $passWord=='123')?'đăng nhập thành công':'đăng nhâp thất bại';
	echo $result;
	?>