<?php
include "Employee.php";

$trabajador1= new Employee();

$trabajador1->setNom(28);
$trabajador1->setSou();

echo "<br/>Edad: ".$trabajador1->nom;
echo "<br/>Altura: ".$trabajador1->sou;

$trabajador1 = initialize();
$trabajador1 = print();
?>

