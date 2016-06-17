<?php 
	function printTest($n,$name){
			switch ($name) {
				case 1:
					# code...
					pritnPyramid($n);
					break;
				case 2:
					# code...
					printDiamond($n);
					break;
				default:
					# code...
					echo "name 打错了";
					break;
			}
	}
	function pritnPyramid($m){
	 		for ($i=0; $i < $m; $i++) { 
 			# code...
			for ($k=0; $k <$m-($i+1) ; $k++) { 
				# code...
				echo "&ensp;";
			}
 			for ($j=0; $j <$i*2+1 ; $j++) {
 				# code...
 				// r如果在第一层或者最后一层输出不变
 				if ($i==0||$i==$m-1) {
 					# code...
 					echo "*";
 				}
 				else if ($j==0||$j==$i*2) {
 						# code...
 						echo "*";
 				}
 				else{
 					echo "&ensp;";
 				}
 		}
 		echo "<br>";
 	}		
	}
	function printDiamond($m){
	 		for ($i=0; $i < $m; $i++) { 
 			# code...
			for ($k=0; $k <$m-($i+1) ; $k++) { 
				# code...
				echo "&ensp;";
			}
 			for ($j=0; $j <$i*2+1 ; $j++) {
 				# code...
 				// r如果在第一层或者最后一层输出不变
 				if ($i==0) {
 					# code...
 					echo "*";
 				}
 				else if ($j==0||$j==$i*2) {
 						# code...
 						echo "*";
 				}
 				else{
 					echo "&ensp;";
 				}
 		}
 		echo "<br>";
 	}
 	/*打印一个空下三角*/
 	 		for ($i=1; $i < $m; $i++) { 
 			# code...
			for ($k=0; $k <$i ; $k++) { 
				# code...
				echo "&ensp;";
			}
 			for ($j=0; $j <(2*$m-1)-($i*2) ; $j++) {
 				# code...
 				// r如果在第一层或者最后一层输出不变
 				if ($i==$m-1) {
 					# code...
 					echo "*";
 				}
 				else if ($j==0||$j==(2*$m-1)-$i*2-1) {
 						# code...
 						echo "*";
 				}
 				else{
 					echo "&ensp;";
 				}
 		}
 		echo "<br>";
        
 	}
	}
 ?>