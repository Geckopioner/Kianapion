<?php
//area script PHP
if(isset($_GET["pg"])){
$pg = $_GET["pg"];
}
switch($pg){
    case 1:
        $konten="<h3>page 1</h3>";
        $Judulpage = "page 1";
        break;
        case 2:
            $konten="<h3>page 2</h3>";
            $Judulpage = "page 2";
            break;
            case 3:
                $konten="<h3>page 3</h3>";
                 $Judulpage = "page 3";
                 break;
               
                case 4:
                    $konten="<h3>page 4</h3>";
                    $Judulpage = "page 4";
                    break;
                    $konten ="<h3>page 1</h3>";
                    break;
}
   
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$Judulpage?></title>
</head>
<body>
    <ul>
        <li><a href "?pg=1">Page 1</a></li>
        <li><a href "?pg=2">Page 2</a></li>
        <li><a href "?pg=3">Page 3</a></li>
        <li><a href "?pg=4">Page 4</a></li>
    <?=$konten;?>
  

</body>
</html>