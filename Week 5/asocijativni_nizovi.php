<?php
echo "1. Dat je niz elemenata u obliku MarkaAuta/Godiste.
Ispitati sve automobile kao njihova godista.
Ispitati automobile koji su stariji od 10 godina.
Ispisati automobile cija marka sadrzi string 'opel',
a proizvedena su posle 2000. godine<br>";
$markaAutomobila=array("GOLF II"=>"1992.  ", "LADA"=>"1997. ", "OPEL KADET"=>"2003. ");
$x=0;
foreach ($markaAutomobila as $x=>$x_value)
{
    echo "Auto=" .$x . " " . "Godiste=" . $x_value;
    echo "<br>";
}
echo "stariji od 10 godina: <br>";
foreach ($markaAutomobila as $x=>$x_value)
{
    if ($x_value<date('Y') -10 )
    {
        echo "Auto=" .$x . " " . "Godiste=" . $x_value;
        echo "<br>";
    }
}


echo "<br><br>";

echo "2.  Dat je niz elemenata u obliku ImeOsobe/Visina.<br>
Ispisati sve osobe sa njihovim visinama.<br>
Ispisati sve natprosečno visoke osobe.<br>
Ispisati sve osobe koje imaju maksimalnu visinu.<br>
Ispisati sve osobe sa visinom ispod proseka, a čije ime počinje na slovo 'V'<br>";
$niz=array("Jelena"=>"173","Nikolina"=>"180","Radosav Petrovic"=>"192");
foreach ($niz as $x=>$x_value)
{
    echo "Osoba $x visoka $x_value <br>";
}
/*natprosecno visoke osobe,drugi deo zadatka
da bi odredili, moramo da imamo prosek-znaci,da imamo sumu i podelimo sa brojem osoba*/
$suma=0;
foreach ($niz as $x=>$x_value)
{
    $suma = $suma + $x_value;
}
$prosek = $suma / count($niz);
echo "prosek visina = $prosek <br>";
/*natprosecno visoke osobe: */
foreach ($niz as $x=>$x_value)
{
    if ($x_value > $prosek)
    {
        echo "Osoba $x visoka $x_value cm - tj. iznad proseka <br>";
    }
}
/*ispisati sve osobe koje imaju max visinu-ovde je to samo jedna;
da bi smo to odredili treba da odredimo max visinu i za to nam treba foreach petlja*/
$max=0;
foreach ($niz as $x=>$x_value)
{
    if ($max<$x_value)
    {
        $max=$x_value;
    }
}
echo "Najvisa visina je $max cm <br>";
/*tek posle odredjenog max mozemo pitati koja je to osoba*/
foreach ($niz as $x=>$x_value)
{
    if($max==$x_value)
    {
        echo "Osoba/osobe $x je/su najvisa/e<br>"; /*stavi break; ako zelis
         da ispise SAMO PRVU NAJVISU OSOBU, tj sa break ne*/
    }
}
echo "<br><br>"
?>