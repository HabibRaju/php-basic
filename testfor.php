<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "deo";

    $conn = mysqli_connect($servername, $username, $password, $database);
    $E_id = $_POST['E_id'];
    $E_na = $_POST['E_na'];
    $E_ad = $_POST['E_ad'];
    $E_jd = $_POST['E_jd'];
    $sql = "INSERT INTO `emp` (`E_no`, `E_name`, `E_address`, `E_jd`) VALUES ('$E_id', '$E_na', '$E_ad', '$E_jd'); "; 
    $result = mysqli_query($conn, $sql);
    echo var_dump($result);
   

?>