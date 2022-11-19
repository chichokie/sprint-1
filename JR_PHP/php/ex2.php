<!DOCTYPE html>
<html>
<body>

<?php

$saludo = "Hello, world!";
$saludos = strtoupper($saludo);
$curs = "Aquest es el curs de php";

echo strtoupper("Hello WORLD!")."<br/>";
echo strtoupper($saludo)."<br/>";
echo ($saludos)."<br/>";

echo strlen("Hello world!")."<br/>";
echo strlen($saludo)."<br/>";
echo ($saludo.$curs)."<br/>";
echo strrev("Hello world!")."<br/>";


?>

</body>
</html>
