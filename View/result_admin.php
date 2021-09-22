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
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> Bracu Rails </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244"> 
				
				<a href="../Controller/add_trains.php"> Add Flight </a> 
				<a href="../Controller/cancel_train.php" style="margin-left: 20px;"> Cancel Train </a> 
				<a href="../Model/update_process.php" style="margin-left: 20px;"> Update Train Details </a> 
				<a href="../Controller/search_train1.php" style="margin-left: 20px;"> Search Train </a> <br><br><br>
				 
			</div>
		</div>
	</section>
	
	<section id = "section1">
	<div class="col-md-10" style="text-align: center">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2d2244"> Search Result </div>
		<a href="../Controller/bookingindex.php" style="text-align: center; font-size: 25px; color:#2d2244"> Book Now  </a>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;opacity: 0.7;text-align:center;background:#fcc298;">
			<div class="row" style="padding:5px;"> 
			</div>	
				
			
	
	<div class="row" style="padding:20px;">
	<div class="col-md-10" style="text-align: center; font-size: 18px; color:#0d0f0e">
<?php

require_once('dbconnect.php');

if(isset($_POST['des']) && isset($_POST['del']) && isset($_POST['fdate'])){
	
	session_start();

	
	$b = $_POST['des'];
    $a = $_POST['del'];
	$t = $_POST['fdate'];
	
	
	
	
	$sql = "SELECT fid,fdate,fpl,fst,del,des,dep FROM train_details WHERE des ='$b' AND del ='$a' AND fdate = '$t' ";  
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0 )
	{
	  while($row = mysqli_fetch_array($result))
		  
	  {
		    
			echo $_SESSION['fid']     =  $row[0];
			echo $_SESSION['fdate']   =  $row[1];
			echo $_SESSION['fpl']     =  $row[2];
			echo $_SESSION['fst']     =  $row[3];
			echo $_SESSION['del']     =  $row[4];
			echo $_SESSION['des']     =  $row[5];
			echo $_SESSION['dep']     =  $row[6];
			
			
	 	  echo "<br> Train_no.: ". $row[0]."<br>";
		  echo "<br> Date: ". $row[1]."<br>";
		  echo "<br> Passenger Limit: ". $row[2]."<br>";
		  echo "<br> Condition: ". $row[3]."<br>";
		  echo "<br> Departure Location: ". $row[4]."<br>";
		  echo "<br> Destination: ". $row[5]."<br>";
		  echo "<br> Departure Time: ". $row[6]."<br>";
		  echo "</br>"; 
		
		 
          
	  }
	  header("Location: demo_view.php");
	  
	}
	
	else{
		echo "ID and Date is wrong";
		header("Location: ../Controller/search_train1.php");
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

