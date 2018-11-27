<!DOCTYPE html>
<html>
<head>
</head>
<style type="text/css">
	.content{
		width:800px;
		height: 200px;
		margin: 20px auto;
		text-align: center;
		overflow: hidden;
		text-align: center;
	}
	.content a{
		width: 16%;
		height: 50px;
		color: black;
		font-family: sans-serif;
		font-size: 30px;
		line-height: 50px;
		float: left;
		display: inline-block;
		border: 1px solid #dfdf;
		text-decoration: none;
		list-style-type: none;
		margin: 10px auto;
	}
</style>
<body>

<div class="content">
	<a href="bai5.php?page=1">1</a>
	<a href="bai5.php?page=2">2</a>
	<a href="bai5.php?page=3">3</a>
	<a href="bai5.php?page=4">4</a>
	<a href="bai5.php?page=5">5</a>
	<a href="">next</a><br>
	
</div>
<?php 
	$page= (isset($_GET['page'])==true)?$_GET['page']:"bạn đang không chọn trang nào cả";
 ?>
<h2 style="text-align: center;">Bạn đang ở trang thứ <?php echo $page; ?>	</h2>


</body>
</html>