<body>
<form action="ex_F_3.php" method="post">

<input type="text" name="num1">
<input type="text" name="num2">
<input type="text" name="num3">

<input type="submit" value="Enviar">
</form>
<?php

echo "número de chocolates ";
echo "número de chicles ";
echo "número de caramelos <br>";

$num1 = $_POST['num1']; 
$num2 = $_POST['num2']; 
$num3 = $_POST['num3']; 

$choco = 1;
$chicle = 0.5 ;
$charamel = 1.5 ;

$a = xoco($choco,$num1);
$b = xicle($chicle,$num2);
$c = caramel($charamel,$num3);
$total = $a+$b+$c;

print ("$a + $b + $c");
echo "<br>";
print ("Total ".$total);


function xoco($choco,$num1){

   $r = $choco*$num1;
   return $r;

}
function xicle($chicle,$num2){

    $r = $chicle*$num2;
    return $r;

}
function caramel($charamel,$num3){

    $r = $charamel*$num3;
    return $r;

}

?>
</body>
</html>