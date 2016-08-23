<?php
//类的定义
class Nbaplayer{
	public $name="Jordan";//定义属性
	public $height="198cm";
	public $weight= "98kg";
	public $team="Bull";
	public $playnumber="23";

	//定义方法
	 public function run(){
		echo "Running\n";
	 }
	 public function jump(){
		echo "Jumping\n";
	 }
	 public function dribble(){
		echo "Dribbling\n";
	 }
	 public function shot(){
		echo "Shotting\n";
	 }
	 public function dunk(){
		echo "Dunking\n";
	 }
	 public function pass (){
		echo "passing\n";
	 }

}
//类到对象的实例化
//类的实例化为对象时使用关键字new,new之后紧跟类的名称和一对括号

$jordan = new NbaPlayer();
echo $jordan->name."\n";
?>