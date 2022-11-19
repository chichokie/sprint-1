<!DOCTYPE html>
<html>
<body>
<?php

$edad = readline("ingrese su edad");
$par = impar();

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
//echo "<h1> $nombre </h1>";

?>

</body>
</html>