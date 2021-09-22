<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Login Page </title>
<?php include '../View/UI.php';?>
		</head>

  <body>
	
	<section id = "section1">
		<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> Bracu Rails </div><br><br><br>
                <div class="col-md-10" style="text-align: center; font-size: 26px;"> SIGN IN </div>
		
		<form action="../Model/signin.php" class="form_design" method="post" style="color:White">
			Username <input type="text" placeholder="Enter Username" name="fname"> <br/>
			Password <input type="password" placeholder="Enter Password" name="pass"> <br/> <br/>
			<button type="submit" value="Sign In">Sign In</button> <br><br>
                        <label> Not a member yet ? </label>
                        <a href="Register.php"> Register </a><br>
		</form>
	</section>
<?php include '../View/Footer.php';?>
  </body> 
</html>

