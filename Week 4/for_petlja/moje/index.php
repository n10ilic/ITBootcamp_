<?php
echo "Zadatak1: ispisati brojeve od 1 do 20";
echo "<br>";
for ($i=1; $i<=20; $i++)
{
    echo $i;
}
echo "<br> <br>";
echo "Zadatak2: Ispisati brojeve od 20 do 1 <br>";
for ($i=20; $i>=1; $i--)
{
    echo $i;
}
echo "<br> <br>";

echo "Zadatak3: Ispisati parne brojeve od 1 do 20 <br>";
for ($i=1; $i<=20; $i++)
{   if ($i%2==0) /*f-ja za ispitivanje da li je nesto deljivo sa 2*/
    echo $i;
}
echo "<br> <br>";
echo "verzija 2<br>";
for ($i=2; $i<=20; $i=$i+2) /*najmanji je 2, idi do 20, povecavaj za 2*/
{
    echo $i;
}
echo "<br> <br>";
echo "Zadatak4: Ispisati dvostruku vrednost brojeva od 5 do 15 <br>";
/*dvostruka vr. je 2 x taj br* - treba da ispisemo 2 x taj br.*/
for ($i=5; $i<=15; $i++)
{
    echo 2*$i; /*dva puta vrednost i*/
}
echo "<br> <br>";
/*echo "Zadatak6: Odredi sumu brojeva od 1 do n<br>";
$s=0;
$n=5;
for ($i=1; $i<=$n; $i++)
{
    echo $s=$s+$i;
}
echo "<br> <br>";
echo "Zadatak7: Odredi sumu brojeva od n do m<br>";
$s=0;
$n=5;
$m=7;
for($i=$n; $i<=$m; $i++)
{
    $s=$s+$i;
}
echo $s;*/

echo "zadatak5 <br>";
$n=1;
$m=5;
$p=1;
for ($i=$n; $i<=$m; $i++)
{
   echo  $p*=$i;
}
echo "<br> <br>";

echo "zadatak 9: odrediti sumu kvadrata brojeva od n do m <br>";
$n=5;
$m=7;
$z=0;
for ($i=$n; $i<=$m; $i++)
{
    $z=$z+$i*$i;
}
echo $z;
echo "<br> <br>";

echo "zadatak 10: Preuzeti s interneta 3 slike i  imenotvati ih 1,2 i 3. For petljom u HTML ispisati svaku od slicica uz pomoc brojaca<br>";


echo "zadatak11: sabrati sve brojeve deljive sa 9 u intervalu od 1 do 30<br>";
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

echo "zadatak12: odrediti proizvod svih brojeva deljivih sa 11 u inetrvalu od 20 do 100.<br>";
$s=0;
for($i=20; $i<=100; $i++)
{
    if ($i%11==0)
    {
        $p=$p*$i;
    }
}
echo $p;
echo "<br><br><br>";
echo "Zadatk 13: Prebrojati koliko ima brojeva deljivih sa 13 u intervalu od 5 do 150.<br>";
$s=0;
for ($i=5; $i<=150; $i++)
{
    if ($i%13==0)
    {
        $b=$i/13; /*PITATI DA LI JE TACNO*/
    }
}
echo $b;
echo "<br><br><br>";
echo "Zadatak 14: Ispisati aritmetičku sredinu brojeva od n do m.<br>";
/*Aritmetička sredina ili prosek je pojam iz statistike. Ona se računa za skup brojeva kao količnik zbira članova i broja članova skupa.
Primer 1
    S = (1, 3, 6, 7, 18)
    Skup S ima 5 članova čiji zbir je 35, a aritmetička sredina je 7.
Primer 2
    Ako u dnevniku u osnovnoj školi iz matematike imamo ocene 5, 5, 3, 2, prosek računamo ovako:
    A = (5+5+3+2)/4 = 15/4 =3.75*/

for ($i>=1; $i<=5; $i++)
{   
    $avg=$i/2;
    echo $avg;
}
/*NE RADI-PITATI*/

echo "Zadatak 15:Prebrojati koliko brojeva od n do m je pozitivno, a koliko njih je negativno.<br>";
for ($i=-5; $i<=20; $i++)
{
    $neg=$i<0;
    $poz=$i>0;
}/*NE IDE*/
?>