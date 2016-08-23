<?php
//类的定义
class Nbaplayer{
	public $name="Jordan";//定义属性
	public $height="198cm";
	public $weight= "98kg";
	public $team="Bull";
	public $playnumber="23";

	//构造函数,在对象被实例化的时候自动调用
	function __construct($name,$height,$weight,$team,$playnumber){
		echo "In NbaPlayer constructor\n";
		$this->name = $name;//this是php里的伪变量,表示对象自身.可以通过$this->的方式访问对象的属性和方法
		$this->height = $height
		$this->weight = $weight
		$this->team = $team
		$this->playnumber = $playnumber
	}

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
//对象中的属性成员可以通过->符号来访问
echo $jordan->name."\n";
$jordan->dribble()."\n";
$jordan->pass()."\n";
?>