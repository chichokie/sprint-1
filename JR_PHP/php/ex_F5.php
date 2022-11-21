<!DOCTYPE html>
<html>
<body>
<form action="ex_F5.php" method="post">
<input type="text" name="number">
<input type="submit" value="Enviar">
</form>

<?php
//$nota = readline("ingrese su nota");
//fscanf(STDIN,"%s",$nota);
//$grado = grau($grado);
//echo $grado;
echo "ingresa tu nota";
$nota = $_POST['number'];
function grau($nota){  
if ($nota >= 60){
   
    echo "Primera divisió";
}
    elseif (($nota < 60) and ($nota >= 45)) {
        echo "Segona divisió";
    }
    elseif ($nota < 45 and nota >= 33) {
        echo "Tercera divisió";
    }    
else{
        echo " Reprovaràs ";
}
}
?>

</body>
</html>