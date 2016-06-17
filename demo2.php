<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
	//编写一个程序判断两个数是否能够整除
	$a=90;
	$b=7;
	if($a%$b==0){
		echo "能整除";
	}
	else{
		echo "不能整除";
	}
	echo "<br>";
	$a=10;
	$b=10;
	if ($a==$b) {
		# code...
		echo '$a=$b';
	}

	echo "<br>";
	$a=9;
	if($a){
		echo "结果为真";
	}
	/*逻辑运算符*/
	echo "<br>";
	$a=true || false;//结果为真
	$b=false or true;//结果为假,or的优先级比=还要低
	var_dump($a,$b);
	/*三目运算符*/
	echo "<br>";
    $a=90;
    $b=180;
    $c = $a>$b ? 12 : "hello world!";
    echo 'c='.$c;
    /*字符串连接*/
    echo '<br>';
    $a="hello world";
    $b=123;
    $c=$a.$b;
    echo $c;

    /*类型运算符*/
    echo "<br>";
    class Dog{};
    class Cat{};
    $cat1=new Cat;
    // var_dump($cat1 instanceof Dog);
    //在实际开发中，我们需要去判断某个变量是否是某个类型
    if($cat1 instanceof Cat){
    	echo 'cat1 是一只猫';
    }
    /*优先级运算*/
    echo "<br>";
    $a=3;
    $b=$a++*3;//(++$a)*3;
    echo $b;

    /*流程控制*/
    echo "<br>";
    $age=34;
    if($age>18){
    	echo "你要被送入监狱";
    }
    else if ($age>10) {
    	# code...
    	echo "你要被送入少管所";
    }
    else{
    	echo "下次注意";
    }
    /*编写一个程序，该程序可以接受一个字符*/
    echo "<br>";
    $mychar='b';
    switch ($mychar) {
    	case 'a':
    		# code...
    		echo "今天星期一，猴子穿新衣";
    		break;
    	case 'b':
    		# code...
    		echo "今天星期二，猴子当小二";
    		break;
    	default:
    		# code...
    		echo "今天星期三，猴子爬雪山";
    		break;
    	}
    	/*循环控制*/
    	for($a=0;$a<10;$a++){
    		echo "<hr>你好，曲阜";
    	}
    	$i=1;
    	while ( $i<= 10) {
    		# code...
    		echo "<hr>php是最好的语言";
    		$i++;
    	}
    	echo "<hr>";
 		/*1、打印半个金字塔*/
 		/*死去活来法*/
 		for ($i=0; $i < 5; $i++) { 
 			# code...
 			for ($j=0; $j <$i+1 ; $j++) { 
 				# code...
 				echo "*";
 			}
 			echo "<br>";
 		}
 		echo "<br>";
 		/*二、打印整个金字塔*/
 		for ($i=0; $i < 5; $i++) { 
 			# code...
			for ($k=0; $k <5-($i+1) ; $k++) { 
				# code...
				echo "&ensp;";
			}
 			for ($j=0; $j <$i*2+1 ; $j++) { 
 				# code...
 				echo "*";
 			}
 			echo "<br>";
 		}
 		/*三、升级！打印任意长度的金字塔*/
 		echo "<hr>";
 		$m=5;
	 		for ($i=0; $i < $m; $i++) { 
 			# code...
			for ($k=0; $k <$m-($i+1) ; $k++) { 
				# code...
				echo "&ensp;";
			}
 			for ($j=0; $j <$i*2+1 ; $j++) {
 				# code...
 				// r如果在第一层或者最后一层输出不变
 				if ($i==0||$i==$m-1) {
 					# code...
 					echo "*";
 				}
 				else if ($j==0||$j==$i*2) {
 						# code...
 						echo "*";
 				}
 				else{
 					echo "&ensp;";
 				}
 		}
 		echo "<br>";
 	}
 	/*打印一个空上三角*/
 		echo "<hr>";
 		$m=5;
	 		for ($i=0; $i < $m; $i++) { 
 			# code...
			for ($k=0; $k <$m-($i+1) ; $k++) { 
				# code...
				echo "&ensp;";
			}
 			for ($j=0; $j <$i*2+1 ; $j++) {
 				# code...
 				// r如果在第一层或者最后一层输出不变
 				if ($i==0) {
 					# code...
 					echo "*";
 				}
 				else if ($j==0||$j==$i*2) {
 						# code...
 						echo "*";
 				}
 				else{
 					echo "&ensp;";
 				}
 		}
 		echo "<br>";
 	}
 	/*打印一个空下三角*/
 			$m=5;
 	 		for ($i=1; $i < $m; $i++) { 
 			# code...
			for ($k=0; $k <$i ; $k++) { 
				# code...
				echo "&ensp;";
			}
 			for ($j=0; $j <9-($i*2) ; $j++) {
 				# code...
 				// r如果在第一层或者最后一层输出不变
 				if ($i==4) {
 					# code...
 					echo "*";
 				}
 				else if ($j==0||$j==9-$i*2-1) {
 						# code...
 						echo "*";
 				}
 				else{
 					echo "&ensp;";
 				}
 		}
 		echo "<br>";
        
 	}
 ?>
</body>
</html>
