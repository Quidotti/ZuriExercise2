<?php


    require_once 'database.php';

    $sql = "SELECT * FROM courses ORDER BY id DESC";

    $result = mysqli_query($conn, $sql);

?>