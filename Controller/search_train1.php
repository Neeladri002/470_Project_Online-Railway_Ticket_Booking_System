<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Search Train </title>
		<?php include 'UI.php';?>
		</head>
  <body>
 <!-- following section is used for creating the menubar in the webpage -->

	
  	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> Bracu Rails </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244"> 
				
                <a href="add_trains.php" style="text-align: center;font-size: 25px; color:#2d2244"> Add Train </a> 
				<a href="cancel_train.php" style="margin-left: 20px;"> Cancel Train </a> 
				<a href="update_seats.php" style="margin-left: 20px;"> Update Seats </a><br><br><br>
				 
				 
			</div>
		</div>
	</section>
	
<section id = "section1">
	<div class="col-md-10" style="text-align: center">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2FFFFF"> Search Train </div>
		
		<form action="show_details.php" class="form_design" method="post"> 
		<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">
			Destination: <input type="text" name="des"> <br/>
            Departure:<input type="text" name="del"> <br/> <br/>
			Date: <input type="date" name="fdate"> <br/> <br/>
			
			<button type="submit" value="Search"> Search </button>
			</div>
		</form>

	</section>

	<?php include 'Footer.php';?>
</body>
</html>