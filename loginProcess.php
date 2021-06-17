

<?php
  
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "info";

    $conn = mysqli_connect($servername,$username,$password,$database);
    $email = $_POST['email'];
    $password = $_POST['Password'];
    
    $str = md5($password);

    $sql = "SELECT * FROM `stu` WHERE `E-mail` = '$email' AND `password`='$str'";

    $result = mysqli_query($conn, $sql);

    //$result = $conn->query($sql);
    $user = $result->fetch_assoc();

    if(!empty($user)){

       echo "Login Successfully";
       $_SESSION['username'] = $user['First Name'];
       $_SESSION['userid'] = $user['id'];
       header("Location: http://localhost/Php%20basic");
    }
    else echo "invalid";

?>