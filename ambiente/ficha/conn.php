<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "acomercial-teste";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Não foi possível conectar: " . $conn->connect_error);
    }
?>