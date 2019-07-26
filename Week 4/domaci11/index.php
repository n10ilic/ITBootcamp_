<?php
function digitron($x, $y, $op)
{
    switch($op)
    {
        case '+':
            $rez = $x + $y;
            break;
        case '-':
            $rez = $x - $y;
            break;
        case '*':
            $rez = $x * $y;
            break;
        case '/':

            if ($y == 0)
            {
                $rez = 0;
            }

            else
            {
                $rez = $x / $y;
            }
            break;
        
        
    }
    return $rez;
}
$varijabla=digitron(10, 2, '*');
echo $varijabla;
?>