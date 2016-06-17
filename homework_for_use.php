<?php
/*已知手掌游戏机一台320元，MP3一台260元，公司举行抽奖大会
，公司有18人，一等奖游戏机，二等奖MP3，购入5台游戏机，13台
MP3。问：总价为多少，公司实际平均给每人花费了多少钱？
*/ 
// const game=320;
// const mp3=260;
// $all=game*5+mp3*13;
// echo "all cost =".$all."average cost=".round(($all/18),2);
/*
	手掌游戏机和MP3的价格由用户输入
*/
	$game=$_REQUEST['game'];
	$mp3=$_REQUEST['mp3'];
	if ($game&&$mp3) {
		# code...
		$all=$game*5+$mp3*13;
		echo "all cost =".$all."average cost=".round(($all/18),2);
	}
?>