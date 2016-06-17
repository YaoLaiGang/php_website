<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
	/*接收用户从myCal.php(对应静态页面)提交的php*/
	/*我们按照正常思路，应当保证接收数据的时候$_REQUEST['参数']要和提交数据的页面给出html元素名字要一致，如果不一致，则会出现notice提示，同时我们接收的数据就是null或者""*/
	// 1、接收num1
	// $_REQUEST,该方法可以接受用户的post或者get的值
	$num1=$_REQUEST['num1'];
	// 2、接收num2
	$num2=$_REQUEST['num2'];
	// 3、接收运算符
	$char=$_REQUEST['char'];

	$res=0;
	switch ($char) {
		case '+':
			# code...
			$res=$num2+$num1;
			break;
		case '-':
			# code...
			$res=$num1-$num2;
			break;
		case '*':
			# code...
			$res=$num1*$num2;
			break;
		case '/':
			# code...
			$res=$num1/$num2;
			break;
		default:
			# code...
			echo "错误的输入";
			break;
	}
	echo "$num1 $char $num2=$res<br/>";
 ?>
 <a href="myCal.php">返回重新玩</a>
</body>
</html>
