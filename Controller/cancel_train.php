<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Delete Trains </title>
<?php include 'UI.php';?>
		</head>
  
	<body>
	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> Brac Airlines </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244"> 
				<a href="add_trains.php" style="margin-left: 20px;"> Add Train no. </a> 
				<a href="update_seats.php" style="margin-left: 20px;"> Update Train </a>
				<a href="search_train.php" style="margin-left: 20px;"> Search Train </a> <br><br><br>				
			</div>
		</div>
	</section>  
	
	
	<section id = "section1">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2d2244"> Delete Train </div>
		<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">
		<form action="delete_process.php" class="form_design" method="post">
			Train no.: <input type="text" name="fid"> <br/>
			<br/>
			<button type="submit" value="Delete"> Delete </button>
			</div>
		</form>
	</section>

	
	<!----- Footer ----->
<?php include 'Footer.php';?>
  </body> 
</html>

