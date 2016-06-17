<?php 
	/*我们用函数来解决+-*chu的代码集合问题*/
 	// 1、function是关键字
 	// 2、cal是函数名
 	// 3、形参，特点是不用添加类型
 	function cal($num1,$num2,$oper){
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
	return $res;
 	}
 ?>