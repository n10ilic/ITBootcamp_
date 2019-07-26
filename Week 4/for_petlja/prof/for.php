<?php	
	/*
		1. Ispisati brojeve od 1 do 20
	*/
	/*
	for($i=1; $i<=20; $i++)
	{
		echo $i;
		echo "<br>";
	}
	*/
	
	/*
		2. Ispisati brojeve od 20 do 1
	*/
	/*
	for($i=20; $i>=1; $i--)
	{
		echo $i;
		echo "<br>";
	}
	*/
	
	/*
		3. Ispisati perne brojeve
		od 1 do 20
	*/
	/*
	for($i=1; $i<=20; $i++)
	{
		if($i%2 == 0)
		{
			echo $i;
			echo "<br>";
		}
	}
	*/
	/*
	for($i=2; $i<=20; $i+=2)
	{
		echo $i;
		echo "<br>";
	}
	*/
	
	/*
		5. Ispisati dvostruku 
		vrednost brojeva od 5 do 15
	*/
	/*
	for($i=5; $i<=15; $i++)
	{
		echo "<p>". 2*$i ."</p>";
		echo "<br>";
	}
	*/
	
	/*
		6. Suma brojeva od 1 do n
	*/
	/*
	$s = 0;
	$n = 5;
	
	for($i=1; $i<=$n; $i++)
	{
		//$s = $s + $i;
		$s += $i;
	}
	echo $s;
	echo "<br>";
	*/
	
	/*
		7. Suma brojeva od n do m
	*/
	/*
	$s = 0;
	$n = 5;
	$m = 7;
	
	for($i=$n; $i<=$m; $i++)
	{
		//$s = $s + $i;
		$s += $i;
	}
	echo $s;
	echo "<br>";
	*/
	
	/*
		8. Proizvod brojeva od n do m
	*/
	/*
	$n = 1;
	$m = 5;
	$p = 1;
	
	for($i=$n; $i<=$m; $i++)
	{
		//$p = $p * $i;
		$p *= $i;
	}
	echo $p;
	echo "<br>";
	*/
	
	/*
		9. Suma kvadrata brojeva 
		od n do m
	*/
	/*
	$n = 1;
	$m = 5;
	$s = 0;
	
	for($i=$n; $i<=$m; $i++)
	{
		$s = $s + $i*$i;
		//$s += $i*$i;
	}
	echo $s;
	echo "<br>";
	*/
	
	/*
		11. Sabrati sve brojeve 
		deljive sa 9
		u intervalu od 1 do 30.

	*/
	/*
	$s = 0;
	for($i=1; $i<=30; $i++)
	{
		if ($i%9 == 0)
		{
			$s += $i;
			//$s = $s + $i;
		}
	}
	echo $s;
	echo "<br>";
	*/
	
	/*
		12. Odrediti proizvod 
		svih brojeva deljivih 
		sa 11 u intervalu 
		od 20 do 100.
	*/
	/*
	$p = 1;
	for($i=20; $i<=100; $i++)
	{
		if ($i%11 == 0)
		{
			$p *= $i;
			//$p = $p * $i;
		}
	}
	echo $p;
	echo "<br>";
	*/
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>
