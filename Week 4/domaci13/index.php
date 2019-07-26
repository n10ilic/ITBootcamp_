<?php
echo "1. Odrediti srednju vrednost elemenata celobrojnog niza.<br>";
$niz_1=array(1,2,3,4,5,62,7,18,9,10);
echo "prosek=", array_sum($niz_1)/count($niz_1);
echo "<br><br>";


echo "2. Odrediti maksimalnu vrednost u celobrojnom nizu.<br>";
$niz=array(2,3,4,5,26,17,8);
$maks=$niz[0];
for ($i=1; $i<count($niz); $i++)
{
    if ($niz [$i] > $maks)
    {
        $maks=$niz [$i];
    }
}
echo $maks;
echo "<br><br>";



echo "3. Odrediti minimalnu vrednost u celobrojnom nizu.<br>";
$niz=array(-50,2,43,45,5,-336,17,8);
$min=$niz[0];
for ($i=1; $i<count($niz); $i++)
{
    if ($niz [$i] < $min)
    {
        $min=$niz [$i];
    }
}
echo $min;
echo "<br><br>";

?>