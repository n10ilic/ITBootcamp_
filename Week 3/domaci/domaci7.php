<?php
	echo "1. Izvršiti konverziju zapremine iz galona u litre i obratno, ako važi da je galon = litar * 3.785.";
	echo "<br>";
	$litar=1;
	$galon=$litar*3.785;
	echo "1 galon = ".$litar*$galon;
	echo "<br>";
	echo "10 galona = ".$galon * 10;
	
	$desetGalona=$galon * 10;
	echo $desetGalona; echo " litara";
	echo "<br>";
	echo "10 litara = ".$litar / 3.785 * 10; echo " galona";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";

	echo "2. Pretvaranje kelvine u farenhajte i obratno";
	echo "<br>";
	echo "za kelvin = " .$kel=1;
	echo "<br>";
	echo "celzijus = " .$cels=($kel-273.15);
	echo "<br>";
	echo "farenhajt = " .$far=($kel-273.15)*9/5+32;
	echo "<br>"; echo "<br>";

	echo "za farenhajt = " .$far=1;
	echo "<br>";
	echo "celzijus = " .$cels=($far-32)*5/9;
	echo "<br>";
	echo "kelvin = " .$kel=($far-32) * 5/9 + 273.15;
	echo "<br>"; echo "<br>";


?>

 