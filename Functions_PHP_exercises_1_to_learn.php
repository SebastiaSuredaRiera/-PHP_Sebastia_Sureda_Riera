<?php

//visusi corrections - OK

function Missatge($Argument)
{
    echo "$Argument<br>";
}

Missatge("Bona nit, fins demà ");

echo "</br>";

function Substraccio($val_1, $val_2)
{
    return ($val_1 - $val_2);
}
echo Substraccio(999, 666);

echo "</br>";
echo "</br>";

function Suma($val_1, $val_2)
{
    return ($val_1 + $val_2);
}
echo Suma(999, 666);

echo "</br>";
echo "</br>";

function Multiplication($val_1, $val_2)
{
    return ($val_1 * $val_2);
}
echo Multiplication(999, 666);

echo "</br>";
echo "</br>";

function Division($val_1, $val_2)
{
    return ($val_1 / $val_2);
}
echo Division(999, 666);

echo "</br>";
echo "</br>";

$nom = 'Basti';
echo ("La codificació md5 de $nom és:<br>");
echo md5($nom);

echo "</br>";
echo "</br>";

 ?>
