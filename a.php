<?php 
	require_once 'ninenineforfunction.php';
	// function abc($n){
	// 	if ($n>2) {
	// 		# code...
	// 		abc(--$n);
	// 	}
	// 	echo '$n='.$n.'<br>';
	// }
	// abc(4);
    $a=23;
    function abc(&$b){
        $b=12;
    }
    abc($a);
    echo $a;
    echo "<hr>";
    nine($i=5);
 ?>