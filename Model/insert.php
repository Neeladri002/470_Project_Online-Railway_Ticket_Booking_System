<?php

require_once('dbconnect.php');

if(isset($_POST['fullname']) && isset($_POST['uname']) && isset($_POST['gen']) && isset($_POST['email']) && isset($_POST['card']) && isset($_POST['live']) && isset($_POST['bd']) && isset($_POST['mob']) && isset($_POST['pport']) && isset($_POST['pass'])){
	

	$a = $_POST['fullname'];
	$b = $_POST['uname'];
	$c = $_POST['gen'];
	$d = $_POST['email'];
	$e = $_POST['card'];
	$f = $_POST['live'];
	$g = $_POST['bd'];
	$h = $_POST['mob'];
    $i = $_POST['pport'];
	$j = $_POST['pass'];
        

	$sql = " INSERT INTO user_info VALUES ( '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k' ) ";
	
	
	$result = mysqli_query($conn, $sql);
	
	
	if(mysqli_affected_rows($conn)){
	
		header("Location: index.php");
		
	}
	else{
		//echo "Insertion Failed";
		header("Location: Register.php");
	}
	
}

?>
