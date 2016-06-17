<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
	/*定义一个数组，用户输入10个同学的成绩，数组下标既代表学生学号，要求：
	1、输入学号，打印该学生成绩
	2、输入成绩，打印该学生学号
	3、统计各个分数阶段的学生人数（不及格，差，中，良，优）
	4、输入学号，实现删除学生成绩的功能
	*/
	$arr=explode(' ',$_REQUEST['grade']);
	$grade=$_REQUEST['grade2'];
	if ($grade) {
		# code...
		foreach ($arr as $key => $value) {
			# code...
			if ($value==$grade) {
				# code...
				echo "学号是".$key."<br>";
			}
		}
	}
	$id=$_REQUEST['stu_id'];
	if ($id) {
		# code...
		foreach ($arr as $key => $value) {
			# code...
			if ($key==$id) {
				# code...
				echo "成绩是".$value."<br>";
			}
		}
	}
	$id=$_REQUEST['stu_id2'];
	if ($id) {
		# code...
		foreach ($arr as $key => $value) {
			# code...
			if ($key==$id) {
				# code...
				echo "删掉了学号为:".$key."的记录<br>";
			}
		}
	}
 ?>
</body>
</html>
