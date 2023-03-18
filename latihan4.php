<?php
//Bentuk Percabangan
$nVar = "dua";
switch($nVar){
    case "ONIC";
    echo "nVar Memilih ONIC";
    break;
    case "RRQ";
    echo"nVar Memilih RRQ";
    break;
    case"EVOS";
    echo"nVar Memilih EVOS";
    break;
    default:
    echo "nVar Memilih acak";
    break;
}