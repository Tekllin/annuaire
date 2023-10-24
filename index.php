<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/global.css">
    <title>Document</title>
</head>
<body>
   
</body>
</html>
<?php

require_once './configs/bootstrap.php';
ob_start();

if(isset($_GET["page"])){
    fromInc($_GET['page']);
}

$pageContent = [
    "html" => ob_get_clean(),

];
if(isset($_GET["layout"])){

    include "./templates/layouts/". $_GET["layout"] .".layout.php";
}else{
    include "./templates/layouts/html.layout.php";

}

?> 