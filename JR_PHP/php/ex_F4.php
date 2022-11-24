<!DOCTYPE html>
<html>
<body>
<?php

$num = -2;
par($num);

/*while ($num <= $num_final){
    $num = par($num);
    echo $num."\n";
}*/
function par($num,$num_final = 8){

    while ($num <= $num_final){
        $num = $num +2;
        echo $num."\n";
    }
/*
if ($num <= $num_final):
    
    return $num;
else:
        return " FIN ";
endif;*/
}


?>

</body>
</html>