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
        <th>Employee Name</th>
        <th>Employee Address</th>
        <th>Employee Joining Date</th>
    </tr>
    <?php
        $servername ="localhost";
        $username="root";
        $password="";
        $database="deo";

        $conn = mysqli_connect($servername,$username,$password,$database);
        $sql = "SELECT* from emp";
        $result = mysqli_query($conn,$sql);
        foreach($result as $row){
            echo "<tr>";
            echo "<td>" . $row['E_no'] . "</td>";
            echo "<td>" . $row['E_name'] . "</td>";
            echo "<td>" . $row['E_address'] . "</td>";
            echo "<td>" . $row['E_jd'] . "</td>";
            echo "</tr>";
        }
    ?>
    
    </table>
</div>

</body>
</html>