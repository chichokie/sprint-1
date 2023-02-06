<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ex__3.php" method="post">

<label for="fname">array</label><br>
<input type="text" name="array">
<input type="submit" value="Enviar">
</form>
<?php

echo "ingresa el número de indice <br>\n";

$y = $_POST['array'];
$x = array(10,20,30,40,50,);

unset($x[$y]);
sort($x,1);
ksort($x,1);

var_dump($x);

?>
    
</body>
</html>