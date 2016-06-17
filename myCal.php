<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>php 计算器</title>
</head>
<body>
	<h1 align="center">我的计算器</h1>
	<form method="get" action="result.php">
		<table style="margin: 0 auto; " >
		<tr><td>请输入第一个数：</td><td><input type="text" name="num1"></td></tr>
		<tr><td>请输入第二个数：</td><td><input type="text" name="num2"></td></tr>
		<tr><td>运算符：</td>
		<td>
			<select name="char">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
			</select>
		</td>
		</tr>
		<tr><td colspan="2"><input type="submit" value="计算结果"></td></tr>
		</table>
	</form>
</body>
</html>