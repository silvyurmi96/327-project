<?php
include "connection.php" ;

//$Student_name = $_POST['Student_Name'];

if (isset($_POST["Check"])) {
  $Check = $_POST["Check"];
    $sql="UPDATE  take_attendance ". "SET Student_Check = 'present' ";
}
else {
  $sql="UPDATE  take_attendance ". "SET Student_Check = 'absent' ";
}

if (mysqli_query($conn, $sql))
    {
        echo "<br>";
        echo " New record created successfully";

    }

else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    ?>
