<body>
<form action="ex_F__1.php" method="post">

<input type="text" name="num">
<input type="submit" value="Enviar">
</form>
<?php

echo "ingresa número <br>\n";

$num = $_POST['num']; 

$resultado = criba($num);

print ($resultado);


function criba($num){

    $string = "":
    $string2 = "2":
    $string3 = "":
    $string4 = "":
    $x = 2 ;

    for ($i=1; $i<=$num; $i++){
      $string = $string +$i; }

    echo $string;

    for ($i=$x; $i<=$num; $i++){

        if ($i/2 == 1){
            $string2 = $string2 +$i; 
            $string3 = "2";

        }
    }
    echo $string2;


    for ($i=2; $i<=$num; $i++){
        $x = 3;

        if(int $string2[$i-1]/$x == 1){
            $string3 = $string3 + $string2[$i-1];

        }

        if ($i*$i > $num){

            break;
        }    
    }
    for ($i=$x; $i<=$num; $i++){

        $string4 = $string4 +$i; 
    }


    echo $string3;
    echo $string4;


    $primo = ;
    $string = $string +$i; 
    unset($x[$y]);
}


if ($num1 == $num2){
    $resultado = $resultado*2;
}


?>
</body>
</html>
