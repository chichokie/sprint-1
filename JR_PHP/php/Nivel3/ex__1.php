<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ex__1.php" method="post">

<label for="fname">Cadenarray</label><br>
<input type="text" name="cadena">
<input type="submit" value="Enviar">
</form>
<?php

$cadena = $_POST['cadena'];
//$cadena1 = trim($cadena);
$n = strlen($cadena);

for ($i=0; $i<$n; $i++){
  
  $string = substr($cadena,$i,1);
  if ($string != " "){
  $array[]= $string;}
}
var_dump($array);

//

?>
</body>
</html>