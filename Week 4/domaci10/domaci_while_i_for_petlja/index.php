<?php
echo "1. Zadatak <br>
Odrediti proizvod brojeva od 1 do 20, a potom od njega oduzeti zbir brojeva od 1 do 30.<br>
a) Koristeći while petlju <br>
b) Kotisteći for petlju<br>
WHILE petlja:<br>";
$i=1;
$proizvod=1;
while ($i>=1 and $i<=20)
{
    $proizvod=$proizvod*$i;
    $i++;
}
echo "Proizvod je $proizvod";
echo "<br>";
$i=1;
$zbir=0;
while ($i<=30)
{
    $zbir=$zbir+$i;
    $i++;
}
echo "Zbir je $zbir";
echo "<br>";
$razlika=$proizvod-$zbir;
echo "Razlika je $razlika";/*PITATI*/
echo "<br> <br>";

echo "FOR petlja<br>";
$n=1;
$m=20;
$p=1;
for ($i=$n; $i<=$m; $i++)
{
    $p=$p*$i;
}
echo "Proizvod je $p <br>";
$n=1;
$m=30;
$s=0;
for ($i=$n; $i<=$m; $i++)
{
    $s=$s+$i;
}
echo "Zbir je $s <br>";
$razlika=$proizvod-$zbir;
echo "Razlika je $razlika"; /*PITATI*/
echo "<br><br><br>";
echo "2. Zadatak<br>
Odrediti sumu kubova brojeva od n do m.<br>
a)Koristeći while petlju<br>
b)Koristeći for petlju<br>";
echo "while <br>";
/* PITATI - MOJ NACIN
$n=3;
$m=9;
$p=1;
$s=0;
while ($n<=$m)
{
    $p=$p*$n*$m;
    $n++;
    $s=$p+$s;
}
echo "suma kubova = $s"; 
*/
$n = 3;
$m = 9;
$suma = 0;
$i = $n;
while($i <= $m) {
    $suma += $i * $i * $i;
    $i++;
}
echo $suma;

echo "<br><br><br>";
echo "for petlja<br>";
    $n = 3;
	$m = 9;
	$s = 0;
	
	for($i=$n; $i<=$m; $i++)
	{
		$s = $s + $i*$i*$i;
        
	}
	echo $s;

?>