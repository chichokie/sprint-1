<?php

include "Shape.php";
include "Rectangulo.php";
include "Triangulo.php";

$tr1 = new Triangulo(2,3);
$tr = $tr1 -> area();

echo "<br>";

$rect1 = new Rectangulo(2,3);
$rect = $rect1 -> area();

//echo "$tr.\n";
//echo "<br>";
//echo $rect;
?>