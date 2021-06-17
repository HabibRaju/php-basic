<!DOCTYPE html>
<html>
<head>
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

<h2>HTML Table</h2>
<div class="conteiner">
    <table>
    <tr>
        <th>Employee ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
    </tr>
    <?php
            session_start();
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "info";
        
            $conn = mysqli_connect($servername,$username,$password,$database);
        
            $user_id = $_POST['user_id'];
            $sql = "SELECT *FROM stu WHERE `id` = '$user_id'";
            $result = mysqli_query($conn,$sql);
        
            foreach($result as $row){
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['First Name'] . "</td>";
                echo "<td>" . $row['Last Name'] . "</td>";
                echo "<td>" . $row['Phone'] . "</td>";
                echo "</tr>";
            }
    ?>
    
    </table>
</div>

</body>
</html>
