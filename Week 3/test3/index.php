<?php
$pol="m";
if ($pol=="m")
    {
        echo "<img src='slike/muski.png'>";
        echo "<br>";
        echo "Muski pol";
    }
    elseif ($pol=="z")
    {
        echo "<img src='slike/zenski.png'>";
        echo "<br>";
        echo "zenski pol osobe";
    }
echo "<br>";
$godRodj=1993;
$tezina=85;
echo "$tezina kg";
echo "<br>";
$visina=185;
$trenGod=date('Y');
$brojGod=$trenGod-$godRodj;
echo "godine osobe $brojGod";
echo "<br>";
$visinaUmet=$visina/100;
echo "visina osobe $visinaUmet";
echo "<br>";
$BMI=$tezina/($visinaUmet*$visinaUmet);
echo "BMI osobe (indeks telesne mase) $BMI";
echo "<br> <br>";

if ($BMI<18.5)
{
    echo "pothranjenost";
}
elseif ($BMI>=18.5 && $BMI<24.5)
{
    echo "normalna tezina";
}
elseif ($BMI>=20.0 && $BMI<29.9)
{
    echo "povisena tezina";
}
else
{
    echo "gojaznost";
}
echo "<br>";

?>