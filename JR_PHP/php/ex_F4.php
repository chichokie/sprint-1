<!DOCTYPE html>
<html>
<body>
<?php

par();

function par($num_final = 8){

    $num = -2;
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