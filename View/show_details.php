<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Search Result </title>
<?php include 'UI.php';?>
		</head>

  <body> 

     
	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> BRACU RAILS </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244"> 
				
				<a href="add_trains.php"> Add Train </a> 
				<a href="delete_process.php" style="margin-left: 20px;"> Delete Train </a> 
				<a href="update_seats.php" style="margin-left: 20px;"> Update Details </a> 
				<a href="search_train1.php" style="margin-left: 20px;"> Search Train </a> <br><br><br>
				 
			</div>
		</div>
	</section>
	
	<section id = "section1">
	<div class="col-md-10" style="text-align: center">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2d2244"> Search Result </div>
		<a href="bookingindex.php" style="text-align: center; font-size: 25px; color:#2d2244"> Book Now  </a>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;opacity: 0.7;text-align:center;background:#fcc298;">
			<div class="row" style="padding:5px;"> 
			</div>	
				
			
	
	<div class="row" style="padding:20px;">
	<div class="col-md-10" style="text-align: center; font-size: 18px; color:#0d0f0e">
<?php

require_once('dbconnect.php');

if(isset($_POST['des']) && isset($_POST['del']) && isset($_POST['fdate'])){
	
	$b = $_POST['des'];
    $a = $_POST['del'];
	$t = $_POST['fdate'];
	
	$sql = "SELECT fid,fdate,fpl,fst,del,des,dep FROM train_details WHERE des ='$b' AND del ='$a' AND fdate = '$t' ";  
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0 )
	{
	  while($row = mysqli_fetch_array($result))
	  {
		  echo "<br> Train_no: ". $row[0]."<br>";
		  echo "<br> Date: ". $row[1]."<br>";
		  echo "<br> Passenger Limit: ". $row[2]."<br>";
		  echo "<br> status: ". $row[3]."<br>";
		  echo "<br> Departure Location: ". $row[4]."<br>";
		  echo "<br> Destination: ". $row[5]."<br>";
		  echo "<br> Departure Time: ". $row[6]."<br>";
		  echo "</br>";
		
		 
          
	  }
	  }
	
	else{
		echo "ID and Date is wrong";
		header("Location: search_train1.php");
	}
	
}

?>
	</div>
	</div>
	</section>
	
	<!----- Footer ----->
<?php include 'Footer.php';?>
  </body> 
</html>

