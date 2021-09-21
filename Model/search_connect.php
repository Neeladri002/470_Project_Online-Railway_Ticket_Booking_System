<?php

require_once('dbconnect.php');

if(isset($_POST['fdestination']) && isset($_POST['fdeparture']) && isset($_POST['fdate'])){
	
	$i = $_POST['fdestination'];
        $g = $_POST['fdeparture'];
	$t = $_POST['fdate'];
	
	$sql = "SELECT passenger_limit,date,train_no.,departure,destination,departure_time FROM details WHERE destination ='$i' AND date = '$t' AND departure ='$g'";  
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0 )
	{
	  while($row = mysqli_fetch_array($result))
	  {
		  echo "<br> passenger_limit: ". $row[0]."<br>";
		  echo "<br> date: ". $row[1]."<br>";
		  echo "<br> flight_no.: ". $row[2]."<br>";
		  echo "<br> departure: ". $row[3]."<br>";
		  echo "<br> destination: ". $row[4]."<br>";
		  echo "<br> departure_time: ". $row[5]."<br>";
		  echo "</br>";
		  echo "</br>";
		  echo "</br>";
          
	  }
	}
	
	else{
		echo "ID and Date is wrong";
		header("Location: search_train.php");
	}
	
}
?>