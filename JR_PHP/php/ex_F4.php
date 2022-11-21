<!DOCTYPE html>
<html>
<body>
<?php

$num_final = 10;
$num = -2;

while ($num <= $num_final){
    $num = par($num);
    //print ($num);
    echo $num."\n";
}
function par($num){
    $num_final = 10;
if ($num <= $num_final-2):
    $num = $num +2;
    return $num;
else:
        return " FIN ";
endif;

}


?>

</body>
</html>