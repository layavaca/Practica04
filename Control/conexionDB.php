<?php

    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $base = "hypermedial";

    $conn = new mysqli($servidor, $usuario, $password, $base);
    $conn->set_charset('utf8');

    if($conn->connect_error){
        die("Conexion Fallida".$conn->connect_error);
    }

?>
