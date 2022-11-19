<!DOCTYPE html>
<html>
<body>
<?php

//$edad = readline("ingrese su edad");
$edad = 0;
echo "ingresa tu edad";
fscanf(STDIN,"%s",$edad);
//$edad = ;
$par = impar($edad);

if ($par == true):
    print ("tu edad es par");
else:
    print ("tu edad es impar");
endif;        

function impar($edad){
if ($edad % 2 == 1):
        return false;
else:
        return true;
endif;        

}
print ("tu edad es".$edad);

?>

</body>
</html>