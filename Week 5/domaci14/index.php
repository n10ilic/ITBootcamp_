<?php
echo "1.Odrediti koliko elemenata u nizu celih brojeva ima maksimalnu vrednost.<br>";

$niz = [7,5,8,8,8,4,7,6];
$elem = array_count_values($niz);
$max = max($niz);
echo "br. elemenata (max vrednost):"  .$elem[$max];
echo"<br><br><br>";




echo "2.Odrediti indeks i vrednost prvog člana niza realnih brojeva koji je najbliži srednjoj vrednosti.<br>";
$niz=array(1,2,3,24,5,36,7,28,19);
//    $i   0,1,2, 3,4, 5,6,7,  8
$srVr=array_sum($niz)/count($niz);
$maks=$niz[0];
$index=0;
echo "srednja vrednost je: $srVr <br>";

$duzina=count($niz);
for ($i=0; $i<$duzina; $i++)
{
    if ($niz[$i]==$srVr)
    {
        echo "$niz[$i] sa indeksom $i <br> ";
    }
    else
    {
        
        if(abs($maks-$srVr)>abs($niz[$i]-$srVr))
        {
            $maks=$niz[$i];
            $index=$i;
        };
        
    }
}
echo " to je clan $maks <br>";
echo "ciji je indeks   $index <br>";
echo "<br><br>";
?>