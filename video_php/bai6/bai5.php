<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Câu điều kiện 
	</title>
</head>
<?php 
	$n1='';
	$n2='';
	$caculate='';
	if(isset($_POST['cc']) && isset($_POST['cn'])){
		$cc=$_POST['cc'];
		$cn=$_POST['cn'];
		$caculate=$cn/($cc*$cc);
		// if($caculate<2)
		// {
		// 	echo "nhỏ hơn 2";
		// }
		// else if($caculate>=2 && $caculate<=4)
		// 	{
		// 		echo "lớn hơn 2 và nhỏ hơn 4";	
		// 	}
		// else{
		// 	echo "ngoại tầm";
		// }
		}
	
 ?>
<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
	}

	.content{
		margin: 30px auto;
		width: 600px;
		border: 2px solid black;
		padding:10px;
	}
	.content h1{
		color: red;
		text-align: center;
	}
	.content div.row{
		margin: 20px;
	}
	.content div.row span{
		display: inline-block;
		width: 255px;
		text-align: right;
	}
	.content div.row input[type=text]{
		padding: 3px 5px;
	}

	.content div.row input[type=submit]{
		padding: 3px 5px;
		display: block;
		margin: 0px auto 20px auto;
	}
</style> 
<body>
<div class="content">
	<h1>Chỉ số IBM</h1>
	<form action="#" method="post" accept-charset="utf-8" name="form" >
		<div class="row">
			<span>Cân nặng(kg)</span>
			<input type="text" name="cn" value="<?php echo $cn ?>">
		</div>
		<div class="row">
			<span>Chiều cao(cm)</span>
			<input type="text" name="cc" value="<?php echo $cc ?>">
		</div>
		
		<div class="row">
			<input type="submit" name="tinh" value="Tính">
		</div>
	<h1>Kết quả: 
		<?php 
		if($caculate<18.5)
		{
			echo "gầy thấp";
		}
		else if($caculate>18.5 && $caculate <24.9)
			{
				echo "bình thường trung bình";	
			}
		else{
			echo "ngoại tầm";
		} ?>
		
	</h1>
	</form>
</div>
</body>
</html>