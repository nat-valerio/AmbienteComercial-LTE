<?php
    include 'conn.php';

    $id     = $_GET['id'];
    $status = true;

    $sql = "UPDATE cdficha SET status=true WHERE id='$id'";

?>