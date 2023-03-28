<?php
//$cars = array ("volvo","BMW","Toyota");

//Model 2
$cars[0] = "volvo;";
echo "<br>";
$cars[1] = "BMW;";
echo "<br>";
$cars[2] = "Toyota;";
echo "<br>";
$cars[3] = "Pak jero;";

//Pertukaran data with json
header('Content-type: application/json; charset=utf-8');
echo json_encode($cars);