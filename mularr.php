<?php 
	$arr=array(array(0,0,0,0,0,0),array(0,0,1,0,0,0),array(0,2,0,3,0,0),array(0,0,0,0,0,0));
	/*遍历二维数组*/
	foreach ($arr as $k1 => $v1) {
		# code...
		foreach ($v1 as $k2 => $v2) {
			# code...
			// 注意$ensp；中不要丢掉分号
			echo $v2.'&ensp;';
		}
		echo "<br>";
	}
	// 访问单个元素
	echo "<br>".$arr[2][3];
	/*注意整个数组长长度可变*/

	/*矩阵转置*/

	echo "<hr>";
	$arr=array(array(1,2,3),array(4,5,6),array(7,8,9));
	for ($i=0; $i < count($arr); $i++) { 
		# code...
		for ($j=$i+1; $j < count($arr[$i]); $j++) { 
			# code...
			$temp=$arr[$i][$j];
			$arr[$i][$j]=$arr[$j][$i];
			$arr[$j][$i]=$temp;
		}
	}
	
	foreach ($arr as $k1 => $v1) {
		# code...
		foreach ($v1 as $k2 => $v2) {
			# code...
			echo $v2.'&ensp;';			
		}
		echo "<br>";
	}
 ?>