<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Booking </title>
<?php include 'UI.php';?>
		</head>
  <body> 

     
	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> Bracu Rails </div>
			<div class="col-md-10" style="text-align: center"> 
				
				<a href="search_train.php" style = "font-size: 25px; color:#FFFFFF" >Train Search </a> 
				 
			</div>
		</div>
	</section>
	
	<section id = "section1">
	<div class="col-md-8" style="text-align: center">
		<div class="col-md-8" style="text-align: center; font-size: 60px; color:#FFFFFF"> Ticket Booking </div>
		

	<section id = "section1">	
		<form action="booking1.php" class="form_design" method="post">
		<div class="col-md-8" style="text-align: center; font-size: 25px; color:#fbf7f7">
			Passenger Name: <input type="text" name="sid"> <br/>
			Train no.:<input type="text" name="omg"> <br/>
			Departure Date: <input type="date" name="cls"> <br/>
			Destination: <input type="text" name="address"> <br/>
			Passport no: <input type="text" name="pport"> <br/> 
			Passport Issue Date: <input type="date" name="iss"> <br/>
			Passport Expire Date: <input type="date" name="exp"> <br/>
			Credit Card Number: <input type="text" name="ccn"> <br/>
			<button type="submit" value="Purchase">Purchase</button>
			</div>
		</form>
	</section>

	
	<!----- Footer ----->
<?php include 'Footer.php';?>
</body>
</html>

