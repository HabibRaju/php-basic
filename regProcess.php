<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "info";

    $conn = mysqli_connect($servername,$username,$password,$database);
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['Password'];
    $ConfirmPassword = $_POST['Confirm_Password'];
    if($password != $ConfirmPassword){
      header("Location: http://localhost/Php%20basic/registration.php");
      exit();
    }
    $str = md5($password);
    $sql = "INSERT INTO `stu` (`First Name`, `Last Name`, `E-mail`,`password`, `Phone`) VALUES ('$first_name', '$last_name', '$email','$str', '$phone');";
    ///INSERT INTO `stu` (`First Name`, `Last Name`, `E-mail`, `Phone`) VALUES ('Habibur', 'Rahaman', 'habi.amg.2015@gmail.com', '01716215794');
    $result = mysqli_query($conn, $sql);
    echo "Your Registration has been successfully";
?>