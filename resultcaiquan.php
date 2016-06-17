<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
	//获取传来的值
	$opt=$_REQUEST['you'];
	//错误提示
	if ($opt==null) {
		# code...
		echo "error 没传对";
	}
	// 获取随机值
	$random=rand(1,3);
	//情况判断
	switch ($random) {
		case 1:
			# code...
			echo "电脑出的剪刀<br>";
			break;
		case 2:
			# code...
			echo "电脑出的石头<br>";
			break;
		case 3:
			# code...
			echo "电脑出的布<br>";
			break;
		default:
			# code...
			echo "电脑出的石头";
			break;
	}
	/*情况一：拳头*/
	if ($opt=='qt'&&$random==1) {
		# code...
		echo "恭喜你，赢过电脑了";
	}
	if ($opt=='qt'&&$random==2) {
		# code...
		echo "平局！";
	}
	if ($opt=='qt'&&$random==3) {
	# code...
	echo "很抱歉，你输了";
	}
	/*情况二、剪刀*/
	if ($opt=='jd'&&$random==1) {
		# code...
		echo "平局！";
	}
	if ($opt=='jd'&&$random==2) {
		# code...
		echo "很抱歉，你输了";
	}
	if ($opt=='jd'&&$random==3) {
	# code...
	echo "恭喜你，赢过电脑了";
	}
	/*布*/
	if ($opt=='b'&&$random==1) {
		# code...
		echo "很抱歉，你输了";
	}
	if ($opt=='b'&&$random==2) {
		# code...
		echo "恭喜你，赢过电脑了";
	}
	if ($opt=='b'&&$random==3) {
	# code...
	echo "平局！";
	}
 ?>
 <br>
 <a href="caiquan.php">回去继续玩</a>
</body>
</html>