<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['fid']) && isset($_POST['fdate']) && isset($_POST['fpl']) && isset($_POST['fst']) && isset($_POST['del']) && isset($_POST['des']) && isset($_POST['dep']))
{	
	$a = $_POST['fid'];
	$b = $_POST['fdate'];
	$c = $_POST['fpl'];
	$d = $_POST['fst'];
	$e = $_POST['del'];
	$f = $_POST['des'];
	$g = $_POST['dep'];
	
	$sql = " INSERT INTO train_details VALUES( '$a', '$b', '$c', '$d', '$e', '$f', '$g') ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this add is happening in the database
	if(mysqli_affected_rows($conn)){
		echo "Added Successfully, Please Check Travel Details";
		header("Location: add_trains.php");
	}
	else{
		echo "Added Failed";
		header("Location: add_trains.php");
	}
	
}


?>