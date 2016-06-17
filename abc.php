<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
	$e=10;
	$f=1;
	for($i=$e;$i>=1;$i--)
	{
	for($a=$i;$a>=2;$a--)
	{
		echo "　";
	}
	for($c=2*$f-1;$c>=1;$c--)
	{
	if($c!=1&&$c!=2*$f-1&&$i>1)
	echo "　";
	else
	echo "* ";
	}
	echo "<br/>";
	$f++;
	}
	
?>
</body>
</html>
