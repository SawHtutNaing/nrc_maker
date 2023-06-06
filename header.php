<?php 
require_once "connect.php";

function getAll(){
    $query = "SELECT * FROM nrcs" ;
    $data = mysqli_query($GLOBALS['auth'] , $query);
    $assoc = null ;
    while ($row = mysqli_fetch_object($data)) {
        // Add the current row object to the data array
        $assoc[] = $row;
    }
    
    return array_unique(array_map(fn($el)=> $el->nrc_code , $assoc ));

    
}


 $unique_nrc = getAll() ;



if($_SERVER["REQUEST_METHOD"] === "POST"){
    print_r($_REQUEST);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
<body>