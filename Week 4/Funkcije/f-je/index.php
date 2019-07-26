<?php
function mojaFunkcija()
{
    echo "Zdravo svete!";
}
mojaFunkcija (); //poziv funkcije

echo "<br><br><br>";

function mojaFunkcijaa($tekst)
{
    echo $tekst;
}
$tekst = "Zdravo svete!";
mojaFunkcijaa ($tekst);
echo "<br><br><br>";

function korisnik($ime,$god)
{
    echo "$ime ima $god godina";
}
korisnik("Ana",18);
korisnik("Bojana",23);
echo "<br><br>";

function ime($i)
{
    echo "Nikola";
    echo "<br>";
}
for ($i=1; $i<=5; $i++)
{
    ime($i);
}

function prezime($i)
{
    echo "Ilic";
    echo "<br>";
}
for ($i=1; $i<=10; $i++)
{
    prezime($i);
}
echo "<br> <br> <br>";

function zbir($a,$b)
{
    $rez=$a+$b;
    echo $rez;
}
zbir (5,10);
zbir (2,7);
echo "<br><br>";
function zbirr($a,$b)
{
    $rezultat=$a+$b;
    return $rezultat;
}
$rezultat_1=zbirr(5,17);
echo $rezultat_1;
echo "<br><br>";

function zbirrr($a, $b)
{
$rez = $a + $b;
return $rez;
}
$c = zbirrr(2, 3);
$d = zbirrr(1, 4);
echo zbirrr($c, $d);
echo "<br><br><br>";

function zbir1($a, $b)
{
$rez = $a + $b;
return $rez;
}
echo zbir1(zbir1(1,2), zbir1(3,4));
echo "<br><br><br>";

function proizvod($x, $y)
{
    $p=$x*$y;
    return $p;
}
$varijabla=proizvod(3, 2); /*pisemo varijablu (koju mozemo da zovemo kako hocemo) ZATO STO JE ONA POTREBNA
DA BI U NJU SMESTILI ONO STO JE U { } (u ovom slucaju $p) (onaj primer sa 3 case)*/
echo $varijabla;
echo "<br><br><br>";

echo "zadatak1: Napisati funkciju pozdrav kojoj se prosleđuje ime i prezime, a funkcija ispisuje pozdrav.
Na primer za uneto ime Jelena i prezime Matejić, funkcija ispisuje Zdravo Jelena Matejić. <br>";
function imeiprezime($imee,$prezime)
{
    echo "Zdravo $imee $prezime";
}
imeiprezime("Nikola", "Ilic");
echo "<br><br>";

echo "Zadatak2: Napisati funkciju zbir koja računa zbir dva realna broja.
Šta bi trebalo izmeniti da bi se dobila razlika, proizvod ili količnik dva broja?<br>";
function sabiranje($a,$b)
{
    $z=$a+$b;
    return $z;
}
$z=sabiranje(2,10);
echo $z;
echo "<br><br>";

echo "Zadatak3: Napisati funkciju neparan koja za uneti ceo broj n vraća tačno
ukoliko je neparan ili netačno ukoliko nije neparan.<br>";

function neparan($n)
{   

    if ($n % 2 == 0)
    return $n;
    echo "tacno";
    if ($n %2 != 0)
    echo "netacno";
}
$n=neparan(9);
?>