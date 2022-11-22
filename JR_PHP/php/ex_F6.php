<!DOCTYPE html>
<html>
<body>
<form action="ex_F6.php" method="post">
<input type="text" name="number">
<input type="submit" value="Enviar">
</form>
<?php
//$x = readline("Quieres saber si te muerden? " true,false);
echo "Quieres saber si te muerden? ";
$x = $_POST['number'];
$muerde = 0;
if ($x == "si"):
    isBitten();
endif; 

function isBitten(){
   $muerde = rand(0,1);
   return $muerde;

}

//print ("t".$e);

?>

</body>
</html>