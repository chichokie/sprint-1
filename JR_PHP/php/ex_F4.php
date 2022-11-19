<!DOCTYPE html>
<html>
<body>
<?php

$num = 0;

while ($num <= $num_final){
    $num = par($num);
    print ($num);
    echo $num;
}
function par($num){
    //$num_final = 10;
if ($num<=10):
    $num = $num +2;
    return $num;
else:
        return " FIN ";
endif;

}


?>

</body>
</html>