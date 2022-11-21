<!DOCTYPE html>
<html>
<body>
<form action="ex_F1.php" method="post">
<input type="text" name="number">
<input type="submit" value="Enviar">
</form>
<?php
//$edad = 0;
echo "ingresa tu edad <br>\n";
//if ( isset( $_POST['number'] )) {
$edad = $_POST['number']; 
$par = impar($edad);

if ($par == true):
    print ("tu edad es par <br>\n");
else:
    print ("tu edad es impar <br>\n");
endif;        

function impar($edad){
if ($edad % 2 == 1):
        return false;
else:
        return true;
endif;        

}
print ("tu edad es  ".$edad);
?>

</body>
</html>
