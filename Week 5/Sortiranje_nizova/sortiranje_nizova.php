<?php
$brojevi=array(1,2,3,4,5);
sort($brojevi); //sort sortira nizove u rastucem poretku
foreach ($brojevi as $niz)
{
echo $niz;
echo "<br>";
}

echo "<br><br>";
//-----------------------------------------------------------------------
rsort($brojevi); //rsort - sortira nizove u opadajucem poretku
foreach ($brojevi as $niz)
{
    echo $niz;
    echo "<br>";
}
echo "<br><br>";
//-----------------------------------------------------------------------
$auto=array("GOLF II"=>"1992", "LADA"=>"1990", "OPEL KADET"=>"2003");
asort($auto); //asort - sortira asocijativne nizove u rastucem poretku prema vrednosti
foreach ($auto as $niz)
{
    echo $niz;
    echo "<br>";
}
echo "<br><br>";
//-----------------------------------------------------------------------
ksort($auto); //ksort - sortira asocijativni niz u opadajucem poretku prema kljuci 
foreach ($auto as $niz)
{
    echo $niz;
    echo "<br>";
}
echo "<br><br>";
//-----------------------------------------------------------------------
arsort($auto); //arsort-sortira asocijativni niz u opadajucem poretku
foreach ($auto as $niz)
{
    echo $niz;
    echo "<br>";
}
echo "<br><br>";
//-----------------------------------------------------------------------
krsort($auto); //krsort-sortira asocijativni niz u opadajucem poretku prema kljucu (alfabetno?)
foreach ($auto as $niz)
{
    echo $niz;
    echo "<br>";
}
echo "<br><br>";
//-----------------------------------------------------------------------
echo "Napraviti asocijativni niz boja gde ce kljuc biti heksadecimalna vrednost boje,
a vrednost odgovarajuci naziv boje. Npr za crvenu boju kljuc ce biti # FF0000, a vrednost
ce biti 'red' . Ovako zadati niz sortirati: <br>
-rastuce u odnosu na heks. kod <br>
-opadajuce u odnosu na heks. kod <br>
-rastuce u odnosu na naziv <br>
-opadajuce u odnosu na naziv. <br>";
//-----------------------------------------------------------------------
$boja=array("blue"=>"#4287f5", "green"=>"#3bf55d", "orange"=>"#ed8e09");
sort ($boja);
foreach ($boja as $niz)
{
    echo $niz;
    echo "<br>";
}
echo "<br><br>";
//-----------------------------------------------------------------------
rsort ($boja);
foreach ($boja as $niz)
{
    echo $niz;
    echo "<br>";
}
echo "<br><br>";
//-----------------------------------------------------------------------
ksort ($boja);
foreach ($boja as $niz)
{
    echo $niz;
    echo "<br>";
}
echo "<br><br>";
//-----------------------------------------------------------------------
krsort ($boja);
foreach ($boja as $niz)
{
    echo $niz;
    echo "<br>";
}
echo "<br><br>";
//-----------------------------------------------------------------------
?>