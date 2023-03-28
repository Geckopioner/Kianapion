<?php 

$age  = array("peter"=>"35","Ben"=>"40","Joe"=>"55");
header('Content-type: application/json; charset=utf-8');
echo json_encode($age);