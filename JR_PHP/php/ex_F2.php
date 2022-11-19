<!DOCTYPE html>
<html>
<body>
<?php
$num = 0;

while ($num <= 10){
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