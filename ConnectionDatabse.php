<?php

    $servename = "localhost";
    $username ="root";
    $password ="";
    $database ="deo";

    $conn = mysqli_connect($servename,$username,$password,$database);
    $sql = "SELECT * FROM emp";
    $result = mysqli_query($conn,$sql);
    echo "Hello<br>";
    echo  mysqli_num_rows($result)."<br>";

    foreach($result as $row){
        echo $row['E_name']."<br>";
    }

?>