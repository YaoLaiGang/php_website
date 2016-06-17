<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
	$str=$_REQUEST['grade'];
	if ($str!=null) {
		# code...
		$arr=explode(" ", $str);
		$all=0;
		foreach ($arr as $key => $value) {
			# code...
			$all+=$value;//隐藏转换string->float
		}
		echo "<b>"."平均时间是".round($all/count($arr),2)."</b>";
	}
 ?>
</body>
</html>