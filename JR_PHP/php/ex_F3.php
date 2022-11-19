<!DOCTYPE html>
<html>
<body>
<?php
//$num_final = readline("Hasta que número hay que contar? ");
$num_final = 10;
$num = 0;

while ($num <= $num_final){
    $num = par($num);
    //print ($num);
    echo $num;
}

function par($num){
    $num = $num +2;
    return $num;

}


?>

</body>
</html>