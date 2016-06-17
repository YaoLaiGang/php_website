<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>猜拳游戏</title>
	<script type="text/javascript">
	function myfunction(obj){
		// 通过id来获取img对象
		var myimg=document.getElementById('myimg');//
		// 通过参数来获取用户的选择
		var val=obj.value;
		//判断并且赋值
		if (val=="qt") {
			myimg.src="qt.png";
		}
		else if (val=="jd") {
			myimg.src="jd.png";
		}
		else if (val=="b") {
			myimg.src="b.png";
		}
	}
	</script>
</head>
<body>
你出拳
<form action="resultcaiquan.php" method="get">
	<select name="you" onchange="myfunction(this);">
	<option value="qt">拳头</option>
	<option value="jd">剪刀</option>
	<option value="b">布</option>
</select>
<img src="qt.png" id="myimg">
<br>
<input type="submit" value="开始!">
</form>

</body>
</html>