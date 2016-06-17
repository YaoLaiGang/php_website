<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
		$str=@$_REQUEST['grade'];
		if ($str) {
			# code...
			$arr=explode(" ", $str);

		}
	 ?>
	<h1>请输入8个分数</h1>
	<form method="post" action="homework_for_array.php">
		<input type="text" name="grade" value="<?php echo "$str"; ?>">
		<input type="submit" value="提交">
	</form>
	<?php 
		if (sort($arr)) {
			# code...
			unset($arr[0]);
			unset($arr[count($arr)-1]);
			$result=0;
			foreach ($arr as $key => $value) {
				# code...
				$result+=$value;
			}
			echo "平均分=".round($result/count($arr),2);
		}
	 ?>
</body>
</html>