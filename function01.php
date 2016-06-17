<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
	require 'function02.php';
	$num1=34;
	$num2=90;

	$oper="+";

	$res=0;

	switch ($oper) {
		case "+":
			# code...
			$res=$num1+$num2;
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
			echo "运算符出错";
			break;
	}
	
	/*将上面的函数进行封装，function02.php*/
	// 以后要计算结果，则可以调用函数
	$res=cal($num1,$num2,$oper);
	echo "计算结果是=".$res;
 ?>
</body>
</html>