<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
	echo "abc";
	echo "hello<br/>";

	$a=890;//a变量是整形
	echo "<br/>";
	var_dump($a);//该函数可以获得变量$a的类型
	$a=1.1;//a变量成为了float类型
	var_dump($a);

	$a=90;
	$A=80;
	echo "a=".$a."<br/>";
	echo "A=".$A;

	$b;
	var_dump($b);

	echo "<br/>".PHP_INT_SIZE;

	$c=0;$d=0.0;$f="";$g="0";$h=null;$i;
	if ($c==false&&$d==false&&$f==false&&$g==false&&$h==false&&$i==false) {
		echo "他们都是假的，是特效";
	}

	$a=0.234242342342342342323432;
	echo '<br/>$a='.$a;
	$b=0.00000000001231231231212;
	echo "<br/>$b=".$b;
	$i=90;
	$user1="hello$i";
	$user2='hello$i';
	echo '<br/>user1='.$user1;
	echo '<br/>user2='.$user2;


	echo "<br/>";
	$v="abcd\"";
	$v2='abcd\"';
	echo $v."<br>";
	echo $v2;

	$a=7/3;//float，保留14位
	echo "a=".$a;
 ?>
</body>
</html>
