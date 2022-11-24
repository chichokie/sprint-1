<!DOCTYPE html>
<html>
<body>
<form action="ex_F3.php" method="post">
<input type="text" name="number">
<input type="submit" value="Enviar">
</form>
<?php
//$num_final = readline("Hasta que número hay que contar? ");
//$num_final = 10;
echo "ingresa el numero <br>\n";
$num_final = $_POST['number'];
$num = 0;
par($num, $num_final);
/*while ($num <= $num_final-2){
    $num = par($num);
    //print ($num);
    echo $num."\n";
}*/

function par($num, $num_final){
    while ($num <= $num_final-2){
        $num = $num +2;
        echo $num."\n";
    }
}
?>

</body>
</html>