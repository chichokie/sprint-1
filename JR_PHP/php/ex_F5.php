<!DOCTYPE html>
<html>
<body>
<?php

$nota = readline("ingrese su nota");

$grado = par($grado);
print ($grado);
echo $grado;

function grau($nota){
    
if ($nota >= 60):
   
    return "Primera divisió";
    elseif ($nota < 60 && nota >= 45) {
        return "Segona divisió";
    }
    elseif ($nota < 45 && nota >= 33) {
        return "Tercera divisió"
    }
else:
        return " Reprovaràs ";
endif;

}


?>

</body>
</html>