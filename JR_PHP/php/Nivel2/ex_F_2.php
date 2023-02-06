<body>
<form action="ex_F_2.php" method="post">

<input type="text" name="min">
<input type="submit" value="Enviar">
</form>
<?php

echo "ingresa los minutos <br>\n";

$num1 = $_POST['min']; 

$tarifa = 10;

if ($num1 > 3){
    $resultado = ($num1-3) *5 + $tarifa;   
    print ($resultado."ctms"); 
}
else{
    print ($tarifa."ctms");
}

?>
</body>
</html>