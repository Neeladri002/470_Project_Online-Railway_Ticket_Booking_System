<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1; color: Red">
			<title> Details </title>
<?php include 'UI.php';?>
		</head>

  <body> 

	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:Red"> Bracu Rails </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244"> 
				<a href="cancel_train.php" style="margin-left: 20px;"> Delete Details </a> 
				<a href="update_seats.php" style="margin-left: 20px;"> Update Details </a>
				<a href="search_train1.php" style="margin-left: 20px;"> Search </a> <br><br><br>				
			</div>
		</div>
	</section>  
    
	
	<section id = "section1">
<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2d2244"> Add Details </div>
		
			
			<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">
		
		<form action="add_process.php" class="form_design" method="post">
			Train No.: <input type="text" name="fid"> <br/>
			Date: <input type="date" name="fdate"> <br/> 
			Passenger Limit: <input type="text" name="fpl"> <br/>
			Details: <input type="text" name="fst"> <br/>
			Departure Location: <input type="text" name="del"> <br/>
			Destination: <input type="text" name="des"> <br/>
			Departure Time: <input type="time" name="dep"> <br/>
			
			
			<br/>
			
			<button type="submit" value="Add"> Add to Database </button>
			</div>
			
		</form>
	</section>

	
	<!----- Footer ----->
<?php include 'Footer.php';?>
  </body> 
</html>

