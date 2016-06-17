<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<h1>请输入五个学生的成绩，用空格隔开</h1>

	<?php 
	$str=@$_REQUEST['grade'];
	if ($str) {
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

	<form action="array3.php" method="post">
	<input type="text" name="grade" value="<?php echo "$str"; ?>">
	<input type="submit" name="开始统计">
	</form>

</body>
</html>