<?php

//conexion a mysql

function conexion(){
    $PDO = new PDO('mysql:host=localhost;dbname=aventura', 'root', '');
    return $PDO;
}
?>