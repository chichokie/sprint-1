<!DOCTYPE html>
<html>
<body>
<?php
$num_final = readline("Hasta que número hay que contar? ");
$num = 0;

while ($num <= $num_final){
    $num = par($num);
    print ($num);
    echo $num;
}


function par($num){
    $num = $num +2;
    return $num;

}
echo "<h1> $nombre </h1>";

?>

</body>
</html>