<?php

    //Contatos
    $nomec = $_POST['nomec'];
    $emailc = $_POST['emailc'];
    $celc = $_POST['celc'];
    $func = $_POST['func'];

    include 'conn.php';

    //Dados
    
    $sql = "INSERT INTO cdficha (nomec, emailc, celc, func) VALUES ('$nomec,'$emailc', '$celc','$func')";

    if($conn->query($sql) == TRUE){
        echo "Dado inserido com sucesso!";
    }
    else{
        echo "Erro: ".$conn->error;
    }

    $conn->close();
?>