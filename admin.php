<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>

<?php include ("header.php") ?>


<div class="col-sm-12">
   <h1 class="text-center" style="color:MidnightBlue;" >ADMIN DASHBOARD</h1>
</div>

<div class="col-sm-12 jumbo_user"> 
   
   <br>
   <a class="a_color" href="attendancepanel.php"><button type="button" class="btn btn-primary btn-lg">Take Attendance</button></a>
   
   <a class="a_color" href="viewattendanceadmin.php"><button type="button" class="btn btn-primary btn-lg">Today's Attendance</button></a>
   
   
   <a class="a_color" href="viewattendanceadminfull.php"><button type="button" class="btn btn-primary btn-lg">Complete Attendance</button></a>
   
   <a class="a_color" href="employee.php?insert_employee=insert_employee"><button type="button" class="btn btn-primary btn-lg">Add New Student</button></a>
   
   <a class="a_color" href="insertadmin.php"><button type="button" class="btn btn-primary btn-lg">Add New Admin</button></a>
   
   
   <a class="a_color" href="employee.php?view_employee=view_employee"><button type="button" class="btn btn-primary btn-lg">View Student Details</button></a>
   
   <a class="a_color" href="viewadmin.php?view_admin=view_admin"><button type="button" class="btn btn-primary btn-lg">View Admin Details</button></a>

   <a class="a_color" href="logout.php"><button type="button" class="btn btn-primary btn-lg">Logout</button></a>
   
</div>
  

<?php } ?>



<?php include("footer.php") ?>