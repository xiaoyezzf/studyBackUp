<?php

	header("Content-Type:text/html;charset=utf-8");

	echo "<hr>";
	echo "输出图形<br>";


	for($a = 1 ; $a <=11 ; $a++)
	{
		
		if($a == 1 || $a == 11)
		{
			echo "*";
			for($b =1 ; $b <= 6 ; $b++)
			{
				echo "&nbsp;";
			}
			echo "*<br>";
		}
		
		if($a == 2 || $a == 10)
		{
			echo "**";
			for($b =1 ; $b <= 5 ; $b++)
			{
				echo "&nbsp;";
			}
			echo "**<br>";
		}
		if($a == 3 || $a == 9)
		{
			echo "***";
			for($b =1 ; $b <= 4 ; $b++)
			{
				echo "&nbsp;";
			}
			echo "***<br>";
		}
		if($a == 4 || $a == 8)
		{
			echo "****";
			for($b =1 ; $b <= 3 ; $b++)
			{
				echo "&nbsp;";
			}
			echo "****<br>";
		}
		if($a == 5 || $a == 7)
		{
			echo "*****";
			for($b =1 ; $b <= 2 ; $b++)
			{
				echo "&nbsp;";
			}
			echo "*****<br>";
		}
		if($a == 6)
		{
			echo "******";
			for($b =1 ; $b <= 1 ; $b++)
			{
				echo "&nbsp;";
			}
			echo "******<br>";
		}
	}

	echo "<hr>";

	for($h=1;$h<=6;$h++)
	{//循环行 
		
    	for($k=1;$k<=6-$h;$k++)
    	{//输出空格部分
        	echo '&nbsp';
    	} 
    	
    	for($i=1;$i<=$h*2-1;$i++)
    	{//输出‘1’部分
        	echo '＊';
    	} 
    	

    	echo '<br/>';//画完一行，换行    	
	}

	echo "<hr>";
	echo "<div style='text-align:center;width:auto;float:left'>"; 
	for($h=1;$h<=6;$h++)
	{//循环行  

    	for($i=1;$i<=$h*2-1;$i++)
    	{//输出‘1’部分
        	echo '*';
    	}
    	echo '<br/>';//画完一行，换行    	
	}
	echo "</div>";

	echo "<div style='clear:left'></div>";


	echo "<hr>";

 

	for($h=1;$h<=6;$h++){echo str_repeat('&nbsp', 6-$h).str_repeat('＊', $h*2-1).'<br>';}



	echo "<hr>";
	

	for($i = 1 ; $i <= 11 ; $i++)
	{
		if($i <= 6)
		{
			echo str_repeat('*', $i) . str_repeat('&nbsp', 6-$i) . ' ' . str_repeat('*', $i) . '<br>';
		}else
		{
			echo str_repeat('*', 12-$i) . str_repeat('&nbsp', $i-6) . ' ' . str_repeat('*', 12-$i) . '<br>';
		}
	}



	echo "<hr>";
	


	$t = 0;
	$html = '<table width="600px" cellpadding="10" cellspacing="0" border="1" align="center">';
	$tr = 0;
	while ($tr < 20) {			
		if($tr % 3 == 0)
		{
			$html .= '<tr style="background:tomato">';
		}
		if(($tr-1) % 3 == 0)
		{
			$html .= '<tr bgcolor="aqua">';
		}
		if(($tr-2) % 3 == 0)
		{
			$html .= '<tr bgcolor="greenyellow">';
		}

		$td = 0;
		while ($td < 10) 
		{			
			$html .= '<td>'.($tr *10 +$td + 1).'</td>';
			$td++;			
		}
		$html .= '</tr>';
		$tr++;
	}
	$html .= '</table>';
	echo $html;
	echo "<hr>";

?>