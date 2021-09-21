<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Update Train </title>
<?php include 'UI.php';?>
		</head>

  <body> 
	
		<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> Bracu Rails </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244"> 
				<a href="cancel_train.php" style="margin-left: 20px; color:#000000"> Cancel Train </a> 
				<a href="add_trains.php" style="margin-left: 20px; color:#000000"> Add Train </a>
				<a href="search_train1.php" style="margin-left: 20px; color:#000000"> Search Train </a> <br><br><br>				
			</div>
		</div>
	</section>
    
	
	<section id = "section1">
<div class="col-md-10" style="text-align: center; font-size: 60px; color:#FFFFFF"> Update Details </div>
		
			
			<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">
		
		<form action="update_process.php" class="form_design" method="post">
			Train no.: <input type="text" name="fid"> <br/>
			Date: <input type="date" name="fdate"> <br/> 
			Passenger Limit: <input type="text" name="fpl"> <br/>
			Details: <input type="text" name="fst"> <br/>
			Departure Location: <input type="text" name="del"> <br/>
			Destination: <input type="text" name="des"> <br/>
			Departure Time: <input type="time" name="dep"> <br/>
			
			
			<br/>
			
			<button type="submit" value="Update"> Update </button>
			</div>
		</form>
	</section>

	
	<!----- Footer ----->
<?php include 'Footer.php';?>
  </body> 
</html>

