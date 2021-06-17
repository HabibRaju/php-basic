<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
    </style>
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Welcome <?php  echo isset($_SESSION["username"])?$_SESSION["username"]:''; ?></h2>
                        <?php
                            if(empty($_SESSION)){
                            
                        ?>

                        <div class="p-t-6">
                            <a href = "login.php" class="btn btn--radius-2 btn--blue" >Login</a>  
                            <a href = "registration.php" class="btn btn--radius-2 btn--blue" >Register</a> 
                        </div>

                        <?php
                         }
                         else {
                            ?>
                                <table class="table table-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                        <?php
                                            $servername ="localhost";
                                            $username="root";
                                            $password="";
                                            $database="info";

                                            $conn = mysqli_connect($servername,$username,$password,$database);
                                            $sql = "SELECT* from stu";
                                            $result = mysqli_query($conn,$sql);
                                            foreach($result as $row){
                                                echo "<tr>";
                                                echo "<td>" . $row['id'] . "</td>";
                                                echo "<td>" . $row['First Name'] . "</td>";
                                                echo "<td>" . $row['Last Name'] . "</td>";
                                                echo "<td>" . $row['Phone'] . "</td>";
                                                echo '<td><a href = "update.php?id='.$row['id'].'" >Edit</a></td>';
                                                echo "</tr>";
                                            }
                                        ?>
                                        
                                </table> 
                            <div class="p-t-6">
                                <br>
                                <a href = "update.php" class="btn btn--radius-2 btn--blue" >Update Account</a> 
                                <a href = "deleteProcess.php" class="btn btn--radius-2 btn--blue" >Delete Account</a>
                                <br><br> 
                                <a href = "logoutProcess.php" class="btn btn--radius-2 btn--blue" >Logout</a> 
                                <!-- <a href = "registration.php" class="btn btn--radius-2 btn--blue" >Register</a>  -->
                            </div>
                            <?php
                            }

                            ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->