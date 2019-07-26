<?php
/*zadatak 1
Napisati program koji za unetu temperaturu vode u Celzijusovim stepenima, ispisuje
Voda ključa, ukoliko je temperatura vode veća ili jednaka 100 Celzijusovih stepeni
Voda se ledi, ukoliko je temperatura vode manja ili jednaka 0 Celzijusovih stepeni
U ostalim slučajevima ispisati - voda je u tečnom stanju*/

$tempVode=50;
$kljucanje=$tempVode>=100;
$led=0;

if ($tempVode*$kljucanje>=100)
{
    echo "voda kljuca";
}
elseif ($tempVode<=$led)
{
    echo "voda se ledi";
}
elseif ($kljucanje<100)
{
    echo "voda je u tecnom stanju";
}
echo "<br>";
echo "<br>";
echo "<br>";
/* Zadatak 2
Prema jednoj podeli, u psihologiji postoji četiri tipa ličnosti - sangvinik, melanholik, flegmatik i kolerik.
Za uneti tip ličnosti na ekranu prikazati odgovarajući avatar (sličicu). */

$tipLicnosti="S";
    if ($tipLicnosti=="S")
    {
        echo "<img src='slikeTipLicnosti/sangvinik.png'>";
    }
    elseif ($tipLicnosti=="M")
    {
        echo "<img src='slikeTipLicnosti/melanhonlik.png'>";
    }
    elseif ($tipLicnosti=="F")
    {
        echo "<img src='slikeTipLicnosti/flegmatik.png'>";
    }
    elseif ($tipLicnosti=="K")
    {
        echo "<img src='slikeTipLicnosti/kolerik.png'>";
    }
echo "<br>";
echo "<br>";
echo "<br>";

/* Zadatak 3
Pretvoriti uneto vrednost kalorija (kcal) u kilo džule (kJ), ako se izračunavanje vrši po formuli: 1 kcal = 4.1868 kJ
Ukoliko je dobijena vrednost manja od 2000 kJ ispisati “povećajte dnevni unos”, ukoliko je dobijena vrednost veća od 
4000 kJ ispisati “smanjite dnevni unos”,
u ostalim slučajevima ispisati “dnevni unos je u redu” .*/

$kJ=500;
$kcal=4.1868*$kJ;  

if ($kJ*$kcal<2000*$kJ)
{
    echo "povecajte dnevni unos";
}
elseif ($kJ*$kcal>4000*$kJ)
{
    echo "smanjiti dnevi unos";
}
elseif ($kJ*$kcal>2000)
{
    echo "dnevni unos je u redu";
}
elseif ($kJ*$kcal<4000)
{
    echo "dnevni unos je u redu";
}

?>