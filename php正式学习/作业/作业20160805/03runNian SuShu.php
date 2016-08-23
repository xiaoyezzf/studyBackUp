<?php

	header("Content-Type:text/html;charset=utf-8");


	echo '<hr>';

	echo '判断是否为闰年<br>';

	$year = date('Y');
	$year2 = rand(0,3000);

	if($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0)
	{
		echo $year . '是闰年' . '<br>';
	}else
	{
		echo $year . '不是闰年' . '<br>';
	}

	if($year2 % 400 == 0 || $year2 % 4 == 0 && $year2 % 100 != 0)
	{
		echo $year2 . '是闰年' . '<br>';
	}else
	{
		echo $year2 . '不是闰年' . '<br>';
	}



	echo "<hr>";
	echo "判断一个数是否为素数<br>";
	$ss = rand(1,1000);
	if($ss == 2)
		echo $ss. '是素数';
	elseif($ss ==1)
		echo $ss. '不是素数也不是合数';
	else
	{
		for($i=2; $i < $ss ; $i++) 
		{
			if($ss % $i == 0) 
			{
				echo $ss. '不是素数';
				break;
			}			
			echo $ss. '是素数';
			break;
		}
	}

?>