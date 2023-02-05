<!DOCTYPE html>
<html>
<body>
<form action="ex_1.php" method="post">

<input type="text" name="num1">
<input type="text" name="num2">
<input type="submit" value="Enviar">
</form>
<?php

echo "ingresa 2 números <br>\n";

$num1 = $_POST['num1']; 
$num2 = $_POST['num2']; 

$resultado = $num1+$num2;

if ($num1 == $num2){
    $resultado = $resultado*2;
}

print ($resultado);

?>
</body>
</html>
