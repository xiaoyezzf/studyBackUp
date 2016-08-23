<?php
	header("Content-Type:text/html;charset=utf-8");
	

	// function_exists();//检测函数是否被定义

	//返回:如果存在返回true.否则返回false


	function test()
	{
		echo 'function';
	}
	if (function_exists('test'))
		echo 'test函数已经定义';
	else
		echo 'test,未定义';


	if (!function_exists('test'))
	{
		function TEST()
		{
			echo "TEST";
		}
	}




	function test1()
	{
		echo 'this is test function';
	}

	if(!function_exists('test')){
		function TEST()
		{
			echo 'this is jiance guo hou de function';
		}
	}

	if(function_exists('test'))
	{
		echo 'test 函数已经定义了!';
	}else{
		echo 'test 未定义,可以定义了!';
	}

	test();





	echo '<hr>';


	//检测文件是否存在-----------------------------------------------------------------------------------------------------------------------------------------------


	file_exists('文件路径');// 检测文件是否存在

	//返回:如果存在返回true.否则返回false


	if (file_exists('./1.txt'))
	{
		echo '存在';
		unlink('./1.txt');
	}
	else
	{
		echo '不存在';
	}

	echo '<hr>';

	//







	//------------------------------------------------------------------

	// trim   ltrim  rtrim  删除指定字符或者空格和预定义字符

	// \n   \r   \t  预定义字符


	$str = " !\n   axxxxxhhhhhhxxxxxxxxxx,\n bbbbbbbbbbbbbbbbbc && ";

	$str = trim($str);

	// $str = trim($str , 'a');
	file_put_contents( './1.txt',$str);
	var_dump($str);



	$arr = array(1,2,3,4,5);

	$arr = rtrim($arr[2]);

	var_dump($arr);

	$aa = "\nbxxx b vvvb ";
	$aa = trim($aa);
	$aa = trim($aa , 'b');
	var_dump($aa);







	echo '<hr>';


	//字符串填充----------------------------------------------------------------------------------------------------------------------------------------------------------

	// str_pad('原始字符串', '指定长度' [, '指定字符' , '填充方向'])
	//使用另一个字符填充字符为指定长度

	$str = 'hello';
	echo str_pad($str, 15 , 'g').'<br>';
	echo str_pad($str, 15 , '*' , STR_PAD_LEFT).'<br>';
	echo str_pad($str, 15 , '+' , STR_PAD_BOTH).'<br>';









	echo '<hr>';

	//重复字符串----------------------------------------------------------------------------------------------------------------------------------------------------------


	// str_repeat('指定字符串', '重复次数')
	// 返回指定重复次数的字符串

	echo str_repeat('+', 10).'<br>';

	for ($i = 1 ; $i <= 10 ; $i++)
	{
		echo str_repeat('&nbsp' , 10-$i) . str_repeat('＊', $i).'<br>';
	}









	echo '<hr>';

	//字符串转化为数组(按字符分割)----------------------------------------------------------------------------------------------------------------------------------------------------------

	// str_split('原始字符串' [, '指定长度']);
	//返回一个分割后的2数组
	//如果不指定长度,则按照1个字符画分


	$str = 'abcdefghjiklmn';
	$str2 = '臭不要脸臭不要脸臭不要脸臭不要脸'; //一个汉字=三个字符
	var_dump(str_split($str , 5));
	var_dump(str_split($str2 , 12));





	//讲1234567890转换成123,456,789,0



	
	splits($str = '1234567890');
	function splits($str){
		for ($i = 0 ; $i < strlen($str) / 3 ; $i++)
		echo substr($str, $i*3,3).',';
	}
	




	echo '<br>';



	splits2($str = '1234567890');
	function splits2($str){
		for ($i = 0 ; $i < strlen($str) / 3 - 1; $i++)
			echo substr($str, $i*3,3).',';
		echo substr($str, $i*3 ,strlen($str) % 3);
	}









	
	// 写一个函数判断字符串是否为回文串;
	// 回文串: abcdeedcba 或者 abcdedcba
	//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	echo '<hr>';



	huiWenC($str = 'abcdeedcba');
	function huiWenC($str){
		if ($str == strrev($str))
			echo $str.'是回文串';
		else
			echo $str.'不是回文串';
	}











	//选猴王:一群猴子排成一圈，按1，2，…，n依次编号。然后从第1只开始数，数到第m只,把它踢出圈，从它后面再开始数，再数到第m只，在把它踢出去…，如此不停的进行下去，直到最后只剩下一只猴子为止，那只猴子就叫做大王。要求编程模拟此过程，输入m、n, 输出最后那个大王的编号。

	echo '<hr>';

	// echo monkeyKing($m = 1 , $n = 3);
	// function monkeyKing($m , $n){
	// 	$arr = range(1 , $n , 1);
	// 	$a = $n;
	// 	for ($i = 0 ; $i < $a-1 ; $i++,$n--)//4 0 5,4 1 3, 422
	// 	{
	// 		var_dump($arr);
	// 		if ($m < $n)
	// 			$arr = array_splice($arr, $arr[$m-1]);
	// 		elseif ($m == $n && $n != 1)
	// 			$arr = array_splice($arr, $arr[$m-1]);
	// 		elseif ($m > $n)
	// 			$arr = array_splice($arr, $arr[$m % $n]);-
	// 	}
	// 	var_dump($arr);
	// }



	// $arr = array(1,2,3,4,5);
	// var_dump($arr);
	// $arr = array_splice($arr, $arr[0]);
	// var_dump($arr);





?>
