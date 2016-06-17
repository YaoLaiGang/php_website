<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php 
/*break和continue的使用*/
	$i=0;
	while (++$i) {
		# code...
		switch ($i) {
			case 5:
				# code...
				echo "quit at 5<br/>";
				break;
			case 10:
				# code...
				echo "quit at 10<br/>";
				/*表示跳出从该位置算起的两层循环*/
				break 2;
			default:
				# code...
				break;
		}
	}
	echo '$i='.$i;
	echo "<hr>";
	for ($i=0; $i <13 ; $i++) { 
		# code...
		if ($i==10) {
			# code...
			continue;
		}
		echo '$i='.$i.'<br/>';
	}
	echo "hello<br>";
	for ($i=0; $i < 2; $i++) { 
		# code...
		for ($j=1; $j < 4; $j++) { 
			# code...
			if ($j==2) {
				# code...
				continue 2;
			}
		echo '$i='.$i.'$j='.$j.'<br/>';
		}
	}
	/*goto*/
	goto a;
	echo "aa";
	a:
	echo "bb";
	echo "<br>";
	/*常量,该方法在php5.0.3之后使用*/

	const TAX_RATE=0.09;
	echo 'TAX_RATE='.TAX_RATE;
 ?>
</body>
</html>