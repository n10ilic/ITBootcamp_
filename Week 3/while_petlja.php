<html>
    <head></head>

    <style>

    .blue
    {
        color: blue;
    }

    .yellow
    {
        color: yellow;
    }

    .red
    {
        color: red;
    }
    </style>

    </html>
<?php



/*Ispis brojeva od 1 do 10*/

$x=1;
while ($x<=10)
{
    echo $x;
    echo "<br>";
    $x++;
}
/*objasnjenje u zagradama - Ispisi broj, novi red, povecaj za jedan, i tako u krug*/
echo "<br>";
/*v2*/
$x=0;
while ($x<10)
{
    $x++;
    echo $x;
    echo "<br>";
    
}
echo "<br>";
/*ispisati brojeve od 1-20*/
$x=1;
while ($x<=20)
{
    echo $x;
    echo "<br>";
    $x++;
}
echo "<br>";
/*ispisati brojeve od 20-1*/
$x=20;
while ($x>=1) /*komanda jer smanjujemo X, a on treba da je do 1*/
{
    echo $x;
    echo "<br>";
    $x--;
}
echo "<br>";
/*v2*/
$x=0;
while ($x<20)
{
    echo 20-$x;
    echo "<br>";
    $x++;
   
    
}
echo "<br>";

/*Ispisati parne brojeve od 1 do 20*/
$x=0;
while ($x<20)
{
    $x=$x+2;
    echo "<br>";
    echo "$x";
}
echo "<br>";
/*v2*/
$x=1;
while ($x<=20)
{
    if ($x % 2 == 0)
    {
        echo $x;
        echo "<br>";
    }
    $x++;
}

/*odrediti kolicnik i ostati pri deljenju brojeva a sa b bez koriscenja operacija deljenja i %*/
$a=82;
$b=8;
$kol=0;
$ost=$a;
while ($ost>$b)
{
    $ost=$ost-$b;
    $kol++;
}
echo "$a = $kol * $b + $ost";
echo "<br>";
/*V2-LAKSI
$a=82;
$b=8;
$zbir=0;
$ceoDeo=0;
while ($zbir<=$a)
{
    $zbir = $zbir + $b;
    $ceoDeo=$ceoDeo+1;
}
$ost=$a-$zbir;
echo "";}*/

echo "<br>";
/*DAY2-15.-7*/
echo "while petlja - primer <br>";
$a=31;
$b=9;   
$kol=0;
$ostatak=$a; /*ova petlja "while" ce da se vrsi sve dok je ostatak veci od b*/
while ($ostatak>=$b)
{
    $ostatak = $ostatak - $b;
    $kol ++;
}
echo "$a=$kol*$b+$ostatak";
echo "<br> <br>";

echo "sest paragrafa naizmenicno obojiti sa 3 razlicite boje";
/*paragrafi se boje sa style pa stavimo color*/
$text="TEKST"; /*ovaj paragraf bojimo*/
$i=1; /*promenljiva i pa je menjamo 6 puta*/
while ($i<=6) /*sve dok je i manje ili jednako od 6*/
{
    if ($i%3==1) /*da li i u deljenju sa 3 daje 1*/
    {
        echo "<p class='blue'>$text</p>"; /*ako daje 1 paragraf ce biti plavi*/
    }
    elseif ($i%3==2) /*da li u deljenju sa 3 daje ostatak 2*/
    {
        echo "<p class='yellow'>$text</p>"; /*ako daje ostatak 2 bice zut*/
    }
    else
    {
        echo "<pclass='red'>$text</p>"; /*zadnja grana-ako nije kao u prethodnima text ce biti u crvenoj*/
    }
    $i++;
}
echo "<br> <br>";

echo "Odrediti sumu brojeva od 1 do 100 <br>";
$i=1;
$zbir=0;
while ($i<=100)
{
    $zbir= $zbir + $i;
    $i++;
}
echo "zbir je $zbir";
echo "<br> <br>";


echo "Zadatak7: odrediti sumu brojeva od 1 do n <br>";
$i=1;
$zbir=0;
$n=5;
while ($i<=$n)
{
    $zbir=$zbir+$i;
    $i++;
}
echo "zbir je $zbir";
echo "<br> <br>";

echo "Zadatak8: Odrediti sumu brojeva od n do m <br>";

$zbir=0;
$n=$i; /*stavlja se da je n=i (ne i=1 jer je nepotrebno) zato sto racunamo zbir od n*/
$m=17;
while ( $i<=$m)
{
    $zbir=$zbir+$i;
    $i++;
}
echo "zbir je $zbir";
echo "<br><br>";

echo "ver2-prof";
$n=95;
$i=1;
$suma=0;
echo "<br>";
while ($i<=$n)
{
    $suma=$suma+$i;
    $i++;
}
echo "suma je $suma";
echo "<br> <br>";



echo "zadatak9: Odrediti proizvod brojeva od n do m <br>";
$n=2;
$m=5;
$proizvod=1;
while ($n<=$m)
{
    $proizvod=$proizvod*$n;/*ovo znaci stari proizvod x novi proizvod*/
    $n++;
}
echo "proizvod je $proizvod";
echo "<br> <br>";

echo "Zadatak 10: Odrediti sumu kvadrata brojeva od n do m<br>";
$n=2;
$m=10;
$suma=0;
$i=$n;
while ($i<=$m)
{
    $suma=$suma+($i*$i); /*pow($i, 2) ---znaci i na kvadrat, ili $i**2 ---kvadriranje*/
    $i++;
}
echo "suma kvadrata brojeva od n do m je $suma";
echo "<br> <br>"


?>