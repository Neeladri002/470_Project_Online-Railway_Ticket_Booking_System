<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Search Result </title>
<?php include 'UI.php';?>
		</head>

  <body> 

     
	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2FFFFF"> Bracu Rails </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2FFFFF"> 
				
				<a href="../Controller/add_trains.php"> Add Flight </a> 
				<a href="../Controller/cancel_train.php" style="margin-left: 20px;"> Cancel Train </a> 
				<a href="../Model/update_process.php" style="margin-left: 20px;"> Update Status </a> 
				<a href="../Controller/search_train1.php" style="margin-left: 20px;"> Search Train </a> <br><br><br>
				 
			</div>
		</div>
	</section>
	
	<section id = "section1">
	<div class="col-md-10" style="text-align: center">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2FFFFF"> Search Result </div>
		<a href="bookingindex.php" style="text-align: center; font-size: 25px; color:#2FFFFF"> Book Now  </a>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;opacity: 0.7;text-align:center;background:#fcc298;">
			<div class="row" style="padding:5px;"> 
			</div>
			
				
	
	<div class="row" style="padding:20px;">
	<div class="col-md-10" style="text-align: center; font-size: 18px; color:#0d0f0e">
	
	

	<?php
	session_start();
	
			echo $_SESSION['fid'];
			
			echo $_SESSION['fdate'] ;
			
			echo $_SESSION['fpl'] ;
			
			echo $_SESSION['fst'] ;
			
			echo $_SESSION['del'] ;
			
			echo $_SESSION['des'] ;
			
			echo $_SESSION['dep'] ;
	
	 
	?>
	
		</div>
	</div>
	</section>
	
	<!----- Footer ----->
<?php include 'Footer.php';?>
  </body> 
</html>

