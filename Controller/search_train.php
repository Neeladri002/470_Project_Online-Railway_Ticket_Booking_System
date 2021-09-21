<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Search Train </title>
		<?php include 'UI.php';?>
		</head>
	<body>	
	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> Bracu Rails </div>
			<div class="col-md-10" style="text-align: center; font-size: 25px; color:#2d2244"> 
				
				<a href="bookingindex.php" style = "font-size: 35px; color:#FFFFFF" > Book Now </a><br><br>
				<a href="search_train1.php" style = "font-size: 35px; color:#FFFFFF" > More </a><br><br>
				 
			</div>
		</div>
	</section>
<section id = "section1">
	<div class="col-md-10" style="text-align: center">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#FFFFFF"> Search Train </div>
		
		<form action="search_result.php" class="form_design" method="post"> 
		<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">
			Destination: <input type="text" name="fdestination"> <br/>
            Departure Location:<input type="text" name="fdeparture"> <br/> <br/>
			Date: <input type="date" name="fdate"> <br/> <br/>
			
			<button type="submit" value="Search"> Search </button>
			</div>
		</form>

	</section>

	<?php include 'Footer.php';?>
</body>
</html>