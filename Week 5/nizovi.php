<?php
$niz=array(15,30,20,10,40,50);
$suma=0;
foreach ($niz as $element)
{
    $suma+=$element;
}
echo $suma;
echo "<br><br>";

echo "max vrednost celobrojnog niza<br>";
$maks=$niz[0];/*prvi el. ima indeks 0*/
for ($i=1; $i<count($niz); $i++)
{
    if ($niz [$i] > $maks)  /*nije li trenutni element veci od maks*/
    {
        $maks=$niz [$i];    /*ako jeste, onda maksimalni proglasavamo trenutnim $i*/
    }
}
echo $maks;
echo "<br><br>";

echo "Odrediti indeks najveceg elementa celobrojnog niza<br>";
$niz=array(313,2342,55,4,5);
$maks=$niz[0];
$indeks=0; /*maks je vrednost najveceg elemenata, a indeks je INDEKS tog el*/
for ($i=1; $i<count($niz); $i++)
{
    if ($niz [$i] > $maks)  /*ako jeste, postace maks el do sad*/
    {
        $maks = $niz [$i];    
        $indeks = $i;
    }
}
echo $maks ;
echo "<br>";
echo $indeks;
echo "<br>";



echo "<br><br><br>";
echo "Odrediti broj elemenata celobrojnog niza
koji su veci od srednje vrednosti.<br>";
$niz=array(20,50,90,25);
$maks=$niz[0];
$srVr=0;
$broj=0; /*bitan je jer ga u for petlji povecavamo*/
echo "srednja vrednost je: "; echo $srVr=array_sum($niz)/count($niz);

for ($i=0; $i<count($niz); $i++) 
{
    if ($niz [$i] > $srVr)  
    {
      $broj++;
       
    }
}   
echo "<br>";
 echo $broj; echo " broja su veca od srednje vrednosti";
echo "<br><br>";

echo " primer predavanja: ";


$niz=array(20,50,90,25);
$suma=0; /*suma elemenata koju delimo s brojem*/
        /*cim se trazi sr. vr. trebaju dve petlje jer ne moze sve u jednoj da se uradi*/
$n=count($niz);
foreach($niz as $element)
    {
        $suma+=$element;
    }
$srednjavrednost=$suma / $n ;
$broj = 0;
foreach ($niz as $element)
{
    if ($element>$srednjavrednost)
    {
        $broj++; /*ako jeste, broj povecavamo za 1*/
    }
}
echo $broj;
echo "<br><br><br>";

/*echo "izracunati zbir pozitivnih elemenata celobrojnog niza";
$suma=0;
$i=0;
while ($i<$count($niz))
{   
    if ($niz[i]>0)
    {
        $suma+=$niz[$i];
    }
    $i++;
}
echo $suma;
echo "<br><br><br>";*/

echo "odredi broj parnih elemenata u celobrojnom nizu<br>";
$niz=array(123,4,4,53,13,324);
$broj=0;
foreach ($niz as $elem)
{
    if ($elem % 2 == 0)
    {
        $broj++;
    }
}
echo $broj;
echo "<br><br><br>";


echo "izracunaj sumu elemenata u nizu sa parnim indeksom<br>";
$niz=array(1,4,2,53,12,324);
$suma=0;
for ($i=0; $i<count($niz); $i++)
{
    if ($i % 2 == 0) /*da li je indeks paran*/
    {
        $suma += $niz [$i];
    }
}
echo $suma;
echo "<br><br><br>";

echo "Promeniti znak svakom elementu celobrojnog niza<br>";
$niz=array(2,3,4,5);
foreach ($niz as $vrednost)
{
    $vrednost = (-1)*$vrednost;
    echo $vrednost;
}
echo "<br><br><br>";

/*echo "Promenit znak svakom neparnom elementu celobrojnog niza sa parnim indeksom<br>";
$niz=array(2,3,4,5);
stampajNiz($niz);
for ($i=0; $i<count ($niz); $i++)
{
    if ($niz[$i]%2!=0 && $i%2==0)
    {
        $niz[$i]=-$niz[$i];
    }
}
echo $niz;*/



echo "<br><br><br>";

/*echo "Odrediti broj parnih elemenata
sa neparnim indeksom.<br>";
$niz=array(2,3,4,5,10,20);
stampajNiz($niz);
$broj=0;
for ($i=1;$i<count($niz); $i++)
{
    if ($niz[$i]%2==0)
    {
        $broj++;
    }
}
echo $broj;*/

echo "<br><br><br>";

echo "Ispisati dužinu svakog
elementa u nizu stringova.<br>";
$niz=array('Nikola','Dimitrije','Rade');
foreach($niz as $ime)
{
    echo strlen($ime);
    echo "<br>";
}
echo "<br><br><br>";

echo "Odrediti element u nizu
stringova sa najvećom
dužinom.<br>";
$niz=array('Nikola','Dimitrije','Rade');
$maksDuzina=strlen($niz[0]);
$index=0;
for ($i=1; $i<count($niz);$i++)
{
    if(strlen($niz[$i]) > $maksDuzina)
    {
        $maksDuzina=strlen($niz[$i]);
        $index=$i;
    }

}
echo "ime sa najvecom duzinom: " .$niz[$index];
echo "<br><br><br>";

echo "Odrediti broj elemenata u nizu
stringova čija je dužina veća od
prosečne dužine svih stringova
u nizu.<br>";
$niz=array('Nikola','Dimitrije','Rade');
$zbir=0;
$n=count($niz);
foreach ($niz as $ime)
{
    $zbir+=strlen($ime);
}
echo (int)$srDuz=$zbir/$n;
echo "<br>";
$broj=0;
foreach ($niz as $ime)
{
    if (strlen($ime)>$srDuz)
    {
        $broj++;
    }
}
echo "<br><br><br>";

echo "Odrediti broj elemenata u nizu
stringova koji sadrže slovo 'a'.<br>";
$br=0;
foreach ($niz as $ime)
{
    if(strpos($ime, "a") !== false )
    {
        $br++;
    }
}
echo $br;
echo "<br><br><br>";

echo "Odrediti broj elemenata u nizu
stringova koji počinju na slovo
'a' ili 'A'.<br>";
$zadnjaKlupa=array("Nikola","Dimitrije","Rade", "Ana");
$brojac=0;
foreach ($zadnjaKlupa as $ime)
{
    if ( strpos ( $ime, 'a') === 0 || strpos ($ime, 'A') === 0 ) 
    {
        $brojac++;
    }
}
echo $brojac;
echo "<br><br>";
/*  $a=$b (dodela vrednosti - a dobija vrednost b)
    $a==$b  (poredjenje po vrednosti - true ako a i b imaju istu vrednost, a false inace)
    $a===$b (poredjenje po vrednosti i tipu podataka - true je ako a i b imaju istu vrednost, a false inace)
*/

echo "drugi nacin<br>";
$brojac=0;
foreach($zadnjaKlupa as $ime)
{
    /* vraca podstring od stringa $str
    pocev od pozicije $pos duzine $len
    substr($str,$pos,$len)*/
    if(substr($ime, 0, 1)=="a" || substr($ime,0,1)=="A")
    {
        $brojac++;
    }
}   
echo $brojac;
echo "<br><br><br>";
/*Na osnovu celobrojnog niza $a[0], $a[1], … formirati niz $b[0], $b[1], 
... koji sadrži samo pozitivne brojeve
$a=array(5,8,9,-2);
$b=array(7,0,-1,2);
$c=array();
for($i=0; $i<count($a); $i++)
{
    $c=[2*i]=$a[$i];
    $c=[2*$i+1]=$b[$i];
}

function stampajNiz($niz)
{
    foreach ($niz as $element)
    {
        echo $element . " ";
        echo "<br>";
    }
}
stampajNiz($c);*/

/* 21. Dati su nizovi 
$a[0], $a[1], …, $a[n - 1] i  
$b[0], $b[1], …, $b[n - 1]. 
Formirati niz $c[0], $c[1], …, $c[n – 1] čiji su elementi 
$a[0] * $b[0], $a[1] * $b[1], …, $a[n – 1] * $b[n – 1].*/

$a=array(1,2,3,4);
$b=array(9,10,11,12);
$c=array();
for ($i=0; $i<count($a); $i++)
{
    $c[]=$a[$i]*$b[$i];
}
function stampajNiz($niz)
{
    foreach ($niz as $element)
    {
        echo $element . " ";
        echo "<br>";
    }
}
stampajNiz($c);
echo "<br><br><br>";

/* 22. Na osnovu niza $a[0], $a[1], …, $a[2n - 1] formirati niz $b[0], $b[1], …, $b[n - 1].po formuli*/
$a=array(1,2,3,4);
$b=array();
for ($i=0; $i<count($a/2); $i++)
{
    $b[i]=($a[i]+$a[$n-$i-1])/2;
}
stampajNiz($b);
?>