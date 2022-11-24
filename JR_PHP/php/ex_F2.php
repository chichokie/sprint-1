<!DOCTYPE html>
<html>
<body>
<?php
$num = 0;
par($num);
/*while ($num <= 8){
    $num = par($num);
    //print ($num);
    echo $num."<br>\n";
}*/

function par($num){
    while ($num <= 8){
        $num = $num +2;        
        echo $num."<br>\n";
        //return $num;
    }
    
}
?>

</body>
</html>