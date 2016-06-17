<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
	for ($i=1; $i <=9 ; $i++) { 
		# code...
		for ($j=1; $j <=9 && $j<=$i ; $j++) { 
			# code...
			echo "$i*$j=".($i*$j)."&ensp;";
		}
		echo "<br>";
	}
 ?>
</body>
</html>