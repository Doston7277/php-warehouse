<?php
    include 'db.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $sql = "SELECT * FROM chiqim WHERE id=$id";
    $res = mysqli_query($db, $sql);
    $row = mysqli_fetch_accos($res);
    print_r($row);

?>