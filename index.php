<?php

include ("header.php");

?>

<?php
date_default_timezone_set("Asia/Kolkata");


$date = date('m/d/Y h:i:s a', time());
echo $date;


?>
<div class="container-fluid jumbo" style="background-image: url('clg22.jpeg');">
 <h1 class="text-center" style="color:white";>
   <span style="background-color:#0496d1";>Student Attendance Management System</span>
 </h1>
 <div class="mb-2">
 <h3 class="text-center">
 <span style="background-color:white";>A CMS for Complete Attendance System</span></h3>
 <style> 
 div
 img{
 height: 200px;
 width: 200px;
 }
#left {  
 text-align: left;
 }
 #center {  
 text-align: center;
 }
 #right{  
 text-align: right;
 
 }</style>  
</head>  
<body> 
<div id ="center">
<img src='logof.png' width="200px" height="200px"> 
</div>  
</div>
  <br>
  <br>
 <div class="container-fluid mx-auto">
 <div class="rows">
 
  <div class="col-sm-6 color_white col-sm-6-mod">
    <h3 class="text-center">Admin Dashboard</h3>
	<br>
     <a class="a_color" class="text-center" href="admin.php"><button type="button" class="btn btn-primary btn-lg">Admin Space</button></a>
  
  </div>
  <div class="col-sm-6 color_white col-sm-6-mod">
   <h3 class="text-center">Student Dashboard</h3>
	<br>
    <a class="a_color" class="text-center" href="user.php"><button type="button" class="btn btn-primary btn-lg">User Space</button></a>
	 
  </div>
  
 </div>
 
 </div>
   
</div>



<?php

include ("footer.php"); 

?>