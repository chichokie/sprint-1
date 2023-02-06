<body>
<form action="ex_F_1.php" method="post">

<input type="text" name="anho">
<input type="submit" value="Enviar">
</form>
<?php

echo "Años olímpicos <br>\n";

//$inicio = $_POST['anho'];
$inicio = 1960;
$fin = 2016;


$resultado = calc_A_Olimpico($inicio,$fin);
//print ($resultado);

function calc_A_Olimpico($inicio,$fin){

    for ($ini=$inicio-4; $ini<$fin; ){
        $ini = $ini+4;
        print ($ini);
        echo "<br>";
        
    }
}

?>
</body>
</html>