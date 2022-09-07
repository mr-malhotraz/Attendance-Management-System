<?php include("header.php"); ?> 


    <div class="container-fluid" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Employee Details</h1>
		   <br>
<h4 class="text-center">Employee can find their Roll_No here and can use it to view their attendance</h4>
        <div class="col-sm-10">
		
		<table class="table table-striped table-bordered">
   <thead>
      <tr>
        <th>Roll_No</th>
        <th>Name</th>
		<th>Email</th>
		<th>Department</th>
      </tr>
    </thead>
    <tbody>
		

<?php


//make connection
$con = mysqli_connect('localhost','root','','eattendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
//select database


$sql="SELECT * FROM `employee_details` ";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   

      <tr>
        <td><?php echo $post['id']; ?></td>
        <td><?php echo $post['name']; ?></td>
		<td><?php echo $post['email']; ?></td>
		<td><?php echo $post['contact_no']; ?></td>
		<td><?php echo $post['department']; ?></td>
	   </tr>
    
   
  
      
        
     
 
    
      
           
      
<?php } ?>    
     </tbody>
    </table>
   
  </div>
</div>

<?php include("footer.php"); ?>   
