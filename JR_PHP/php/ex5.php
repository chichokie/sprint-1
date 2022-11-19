
<!DOCTYPE html>
<html>
<body>
<?php
$tres = array(3,5,7);
$cinco = array(2,4,6,8,12);
//$nueve = $tres+$cinco;
array_push($tres,9);
$nueve = array_merge($tres,$cinco);
echo count($nueve);
echo "<h1><b> $tres[0] <b><h1>";

echo print_r($tres).'<br>';
echo print_r($nueve)."<br>";

//echo ($nueve)."<br>";
//print(array_count_values($nueve));

foreach($nueve as $nueve){
    echo $nueve."\n";
}
?>
</body>
</html>
