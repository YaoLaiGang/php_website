<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	/******************第一种方式*******************/
	$hens = array(3,5,1,3.4,2,50);
	$hens[6]=30;
	$add=0;
	//遍历整个数组
	//使用count()可以知道数组有多长：系统函数
	for ($i=0; $i <count($hens); $i++) { 
		# code...
		echo "第".$i."只鸡等于".$hens[$i]."<br/>";
		$add+=$hens[$i];
	}
	echo "总体重=".$add."平均体重=".$add/count($hens);
	/**************第二种方式*******************************/
	echo "<hr>";
	$arry = array('一' => 0,'二' => 1,'三'=> 3);
	$arry['五']=5;
	// 这样的话就没有办法循环控制了,但是foreach能够解决这个问题
	foreach ($arry as $key => $value) {
		# code...
		echo "key=".$key."value=".$value."<br>";
	}
	/*使用print_r来显示整个数组的情况*/
	print_r($arry);
	echo "<br>";
	var_dump($arry);
	echo "<br>";
	/*is_array*/
	$arry=array("123",45,56);
	echo is_array($arry);
	/*字符划分explode*/
	$str="山东 来刚 西安 王二狗";
	$arr=explode(" ",$str);
	print_r($arr);
	/*unset*/
	$arr[0]=123;
	$arr[1]=456;
	$arr[2]="hello";
	//比如用户的购物车删除物品
	echo "<hr>删除前<hr>".$arr[1];
	unset($arr[1]);
	echo "<hr>删除后<hr>".$arr[1];


 ?>
</body>
</html>
