<?php   

    include('conn.php');

    $idficha = $_GET['idficha'];

    $sql="DELETE FROM cdficha WHERE idficha='$idficha'";

    $conn->query($sql);

    $conn->close();

    header('Location: select.php');
?>