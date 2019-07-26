<?php
/*LOGICKI OPERATORI-zadaci*/


/* Napraviti program za koji za uneti pol i broj godina korisnika
ispisuje da lije korisnik muskarac ili zena i da li je punoletan*/
$pol="z";
$god=18;
if ($pol=='z' and $god>=18)
{
    echo " zena punoletna";
}
elseif ($pol=='z' and $god<18)
{
    echo "zena nije punoletna";
}
if ($pol=='m' and $god>=18)
{
    echo "muskarac je punoletan";
}
elseif ($pol=='m' and $god<18)
{
    echo "muskarac je punoletan";
}
echo "<br>";echo "<br>";echo "<br>";

$a=1;
$b=2;
$c=3;
if ($a>$b and $a>$c)
{
    echo "$a je najveci";
}
elseif ($b>$c and $b>$a)
{
    echo "$b je najveci";
}
else
{
    echo "$c je najveci";
}
echo "<br>";echo "<br>";echo "<br>";

/*Ispisati na ekranu ​„ekstremna temperatura“ ​ukoliko je
temperatura manja od -15 stepeni Celzijusovih  i veća od 40stepeni Celzijusovih.*/
$t=10;
if ($t<-15 or $t>40)
{
    echo "ekstremna temperatura";
}
else
{
    echo "nije";
}
?>