<?php
// first of all, we need to connect to the database
require_once("dbconnect.php");

// we need to check if the input in the form textfield is not empty
if(isset($_POST['fid'])){
	$i = $_POST['fid'];
	
	//write the MySQL command and assign to a variable
	$sql = "DELETE FROM train_details WHERE fid = $i";
	
	//Now Execute the Query
	$result = mysqli_query($conn, $sql);
	
	//Check to see if it is success or not
	if($conn->query($sql)=== True){
		echo "Deleted Successfully, Please Check Your Travel Details";
		header("Location: cancel_train.php");
	}
	else{
		echo "Deletion Failed";
		header("Location: cancel_train.php");
	}
}



?>
