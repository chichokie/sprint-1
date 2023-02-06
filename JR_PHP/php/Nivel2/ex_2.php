<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ex_2.php" method="post">

<label for="fname">Cadena</label><br>
<input type="text" name="cadena">
<input type="submit" value="Enviar">
</form>
<?php

$cadena = $_POST['cadena'];
$n = strlen($cadena);

$cadena1 = substr($cadena, 0,1);
$cadena2 = substr($cadena, -1,1);
$cadena3 = substr($cadena,1,$n-2);
//$cadena3 = substr($cadena,-2,$n-1);
 
$array = array($cadena2,$cadena3,$cadena1);
//$array[] = $cadena2;
//$array[] = $cadena;
//$array[] = $cadena1;
//echo $array;

foreach($array as $array){

    echo $array."\n";
   
}

// print_r(str_split(,));
/*
//$array1 = explode("",$cadena);
$array2 = $array;
$long = count($array);

for ($i=0; $i<$long-1; $i++){

    unset($array1[i]);
}

for ($i=0; $i<$long-1; $i++){

    //$array1[]= $array2[$i];

    $array_push($array1,$array2[$i]);
}
$array_push($array[],$cadena);
*/

?>

</body>
</html>