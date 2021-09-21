<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['fid']) && isset($_POST['fdate']) && isset($_POST['fpl']) && isset($_POST['fst']) && isset($_POST['del']) && isset($_POST['des']) && isset($_POST['dep']))
{	
	$i = $_POST['fid'];
	$t = $_POST['fdate'];
	$p = $_POST['fpl'];
	$s = $_POST['fst'];
	$a = $_POST['del'];
	$b = $_POST['des'];
	$c = $_POST['dep'];
	
	$sql = " UPDATE train_details SET fdate = '$b', fpl = '$c', fst = '$d', del = '$e', des = '$f', dep = '$g' WHERE fid = $a ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this delete is happening in the database
	if(mysqli_affected_rows($conn)){
		echo "Updated Successfully, Please Check Travel Details";
	}
	else{
		//echo "Updated Failed";
		header("Location: update_seats.php");
	}
	
}


?>