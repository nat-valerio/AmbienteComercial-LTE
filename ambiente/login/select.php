<?php
    
    session_start();

    include('conn.php');

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM cdusuario WHERE login='" . $login . "' AND senha='" . $senha . "'";
    
    $result = $conn->query($sql);
    $num = $result->num_rows;
    
    $erro = 1;
    if($result->num_rows > 0 ){
        
        $linha = $result->fetch_assoc();
        $_SESSION['login'] = TRUE;
        $_SESSION['senha'] = true;
        $_SESSION['usuario'] = $linha['nome'];
        header('Location: ../meu-perfil.php');
    }
    else{
        header('Location: ../login.php?erro=' . $erro);
    }
?>