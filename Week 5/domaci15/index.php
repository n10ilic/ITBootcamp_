<?php
/* 19. Na osnovu celobrojnog niza $a[0], $a[1],
… formirati niz $b[0], $b[1], ... koji sadrži
samo pozitivne brojeve.*/
$a_1=array(5,8,9,10,-2,-12);
$b_1=array();


foreach ($a_1 as $x)
{
    if ($x > 0)
    {
        $b_1[]=$x;
        echo "<br>";
    }
}
foreach ($b_1 as $x)
{
echo $x;
echo "<br>";
}

/* STARO
foreach ($a_1 as $x=>$x_value)
{
    if ($x_value > 0)
    {
        echo "pozitivni brojevi niza su: " . $x_value;
        echo "<br>";
    }
} */
echo "<br><br><br>";




/* 21. Dati su nizovi 
$a[0], $a[1], …, $a[n - 1] i  
$b[0], $b[1], …, $b[n - 1]. 
Formirati niz $c[0], $c[1], …, $c[n – 1] čiji su elementi 
$a[0] * $b[0], $a[1] * $b[1], …, $a[n – 1] * $b[n – 1].*/

$a=array(2,2,3,4);
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

?>