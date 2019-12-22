<?php
include "connection.php"
 ?>

<!DOCTYPE html>


<html>

<head>
    <meta charset="utf-8">
    <title>Study Point</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>



    <!-- Navbar Starts Here-->
    <nav class="navbar navbar-expand-lg  navbar-dark bg-info">
        <!-- Navbar content -->
        <a class="navbar-brand" href="#">Attendence</a>
        <div class="collapse navbar-collapse" id="navbarText">


            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <button class="nav-link btn btn-outline-info" href="#" onclick="openForm()"
                        style="color: ivory">Home</button>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-info" href="#register" style="color: ivory">About</a>
                </li>
                <li class="nav-item">
                    <button class="nav-link btn btn-outline-info" href="#" onclick="openForm()"
                        style="color: ivory">Login</button>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-info" href="#register" style="color: ivory">Logout</a>
                </li>
            </ul>

        </div>
    </nav>
    <!-- Navbar Ends Here-->
</head>


<div class="container-fluid">
  <div class="row">

<?php //col-md-6 offset-md-3
//class check_attendance extends connection{

  //public function addtoDatabse($value){
    //$insert ="Insert into take_attendance (Student_Check) values ('$value')";
  //  $result = $this->query($insert) or die($this -> error);
    //if ($result) {
      //  return "<h2 class = 'text-success'>Updated</h2>";

    //}
    //else {
      //return "<h2 class = 'text-danger'>Not Updated</h2>";
  //  }
  //}
//}

?>

<!--
 <?php
//if (isset($_POST["submit"])){
  //echo "Data inserted";


//  $student_checked = $_POST["Check"];
//  $newvalue = implode(",", $student_checked );
//  include_once 'check_attendance.php';
//  $check_attendance = new check_attendance();
//  echo $check_attendance -> addtoDatabse($newvalue);
//}
 ?>

-->
<body>


<form class="" action="check_attendance.php" method="post">



    <div class="col-md-12">

      <div class="card shadow mb-4" >
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Student Attendance</h6>
        </div>
        <div class="card-body ">


          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Student ID</th>
                <th scope="col">Student Name</th>
                <th scope="col">Student Phone</th>
                <th scope="col">Student Check</th>
                </tr>
            </thead>
            <tbody>

          <?php


          $query="SELECT * FROM take_attendance ";
            $select_all_students = mysqli_query($conn, $query);
            $i=0;
            while ($row = mysqli_fetch_assoc($select_all_students) ) {


            $Student_Name = $row['Student_Name']   ;
            $Student_Phone =$row['Student_Phone']  ;


            $i++;


            ?>
            <tr>
              <th scope="row"><?php echo $i; ?></th>

              
              <td><?php echo $Student_Name; ?></td>
              <td><?php echo $Student_Phone; ?></td>
              <td><input type="checkbox" name="Check" value="present" >Present</input></td>

              <br>


            </tr>

            <?php
            }

           ?>





            </tbody>
          </table>



          <div class="btn-group">
        <input type="submit" name="submit" class=" btn btn-primary" value="SUBMIT" style="font-size:15pt;color:white;background-color:blue;border:4px solid #900C3F;padding:5px">


          </div>


<?php




 ?>


        </div>
      </div>

    </div>

  </div>

</div>
</form>
</body>

</html>
