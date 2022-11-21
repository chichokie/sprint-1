!DOCTYPE html>
<html>
<body>
<form action="ex_F6.php" method="post">
<input type="text" name="number">
<input type="submit" value="Enviar">
</form>
<?php
echo "Quieres saber si te muerden? ";
//$x = readline("Quieres saber si te muerden? " true,false);
echo "Quieres saber si te muerden? ";
$x = $_POST['number'];
$muerde = 0;
if ($x == true):
    isBitten(0,1);
endif; 

function isBitten(){
   $muerde = rand();
   return $muerde;

}

//print ("t".$e);

?>

</body>
</html>