
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$m = $_GET['m'];

$conn = mysqli_connect('localhost','root','','student');
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}



$sql="SELECT *  FROM take_attendance WHERE Student_Name LIKE '".$m."%'";
$result = mysqli_query($conn,$sql);



if($row = mysqli_fetch_array($result)) {
  echo "<table>
  <tr>
  <th>Student ID</th>
  <th>Student Name</th>
  <th>Student Phone</th>

  </tr>";
    echo "<tr>";
    echo "<td>" . $row['Student_ID'] . "</td>";
    echo "<td>" . $row['Student_Name'] . "</td>";
    echo "<td>" . $row['Student_Phone'] . "</td>";

    echo "</tr>";

}

else{
  echo "NO  Suggestions";
}
mysqli_close($conn);
?>
</body>
</html>
