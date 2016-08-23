<?php 
header("Content-Type:text/html;charset=utf-8");
// header("Content-Type:text/html;charset=utf-8");
	echo "<hr>";
	echo "判断一个数是否为素数<br>";
	$ss =rand(1,1000);
	$xxxx = 1;
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
				$xxxx = $ss . '不是素数';
				echo $xxxx;
				break;
			}			
		}
		if($xxxx == 1)
      		{
      			echo $ss. '是素数';
      		}		
	}
 ?>
	