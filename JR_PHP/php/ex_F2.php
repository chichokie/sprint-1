<!DOCTYPE html>
<html>
<body>
<?php
$num = 0;

while ($num <= 8){
    $num = par($num);
    //print ($num);
    echo $num."<br>\n";
}


function par($num){
    $num = $num +2;
    return $num;

}
?>

</body>
</html>