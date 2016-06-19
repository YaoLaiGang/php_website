<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
	/*新建一个人类*/
	class Person{

		public $name;
		public $age;
		public function speak(){
			echo "我是一个好人<br>";
		}
		// public function jishuan(){
		// 	$res=0;
		// 	for ($i=1; $i <=1000 ; $i++) { 
		// 		# code...
		// 		$res+=$i;
		// 	}
		// 	echo $res."<br>";
		// }
		/*注意，php中的成员方法不支持重载*/
		public function jishuan($n){
			$res=0;
			for ($i=1; $i <=$n ; $i++) { 
				# code...
				$res+=$i;
			}
			echo $res."<br>";
		}
		public function add($a,$b){
			echo ($a+$b)."<br>";
		}
	}
	// $p1=new Person();
	// $p2=new Person();
	// $p1->name="王尼玛";
	// $p1->age="20";
	// $p2->name="王吱吱";
	// $p2->age="30";
	// echo "姓名=".$p1->name."<br>名字=".$p1->age;

	// $p2=$p1;
	// echo "<br>".$p2->name;
	/*函数接收对象的时候，传入的是值还是地址*/
	// $p1=new Person();
	// $p1->name="韩顺平";
	// $p1->age=20;

	// function test1($p){

	// 	$p->name="小明";
	// }
	// test1($p1);
	/*是小明的原因很简单，因为传入函数的时候，传入的是地址而不是值，而基本数据类型传入的是一个值，就是一个副本*/
	// echo $p1->name;
	/*成员方法*/
	$p1=new Person();
	$p1->speak();
	$p1->jishuan(10);
	$p1->jishuan(20);
	$p1->add(10,20);
 ?>
</body>
</html>
