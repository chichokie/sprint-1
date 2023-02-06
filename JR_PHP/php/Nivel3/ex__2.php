<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ex__2.php" method="post">

<label for="fname">Cadenarray</label><br>
<input type="text" name="cadena">
<input type="submit" value="Enviar">
</form>
<?php

$array = array(0,1,2,3,4,5,6,7,8,9,3,5,6,7,3,4,2,0,9,8,7,6,0,1,5,);
$x = implode(',',$array);

$array2 = array_unique($array);
$y = array_diff_assoc($array,$array2);
$repetidos = array_unique($y);
$repeti2 = implode($repetidos);
$num = count($repetidos);
$n = strlen($repeti2);

for ($i=0; $i<$num; $i++){

  $veces_Rep = substr_count($x,$repeti2[$i]);
  print($repeti2[$i]);
  echo "  existete $veces_Rep veces en el array <br>"."\n";
  echo "<br>";


}




?>
    
</body>
</html>