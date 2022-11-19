<!DOCTYPE html>
<html>
<body>
<?php
//$nota = readline("ingrese su nota");

echo "ingresa tu nota";
fscanf(STDIN,"%s",$nota);

//$grado = grau($grado);

//echo $grado;

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

?>

</body>
</html>