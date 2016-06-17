<?php 
	function nine($row){
	for ($i=$row; $i <=$row ; $i++) { 
		# code...
		for ($j=1; $j <=9 && $j<=$i ; $j++) { 
			# code...
			echo "$i*$j=".($i*$j)."&ensp;";
		}
		echo "<br>";
	}		
	}

 ?>