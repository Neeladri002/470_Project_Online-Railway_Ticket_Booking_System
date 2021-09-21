<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Signup Page </title>
<style>   
    Body {  
      font-family: Calibri, Helvetica, sans-serif;  
	  background:url(https://wallpapercave.com/wp/eCGLMhA.jpg) no-repeat center fixed;
	  background-size: cover;
    }  
    
    </style>
		</head>

  <body>
	
	<section id = "section1">
		<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> Bracu Rails </div>
                <div class="col-md-10" style="text-align: center; font-size: 26px;"> SIGN UP </div>
		
		<form action="insert.php" class="form_design" method="post" style="color:White">

Name <input type="text" placeholder="Enter Name" name="fullname"> <br/>
Username <input type="text" placeholder="Enter Username" name="uname"> <br/>
Gender <input type="text" placeholder="Enter Gender" name="gen"> <br/>
Email <input type="text" placeholder="Enter Email ID" name="email"> <br/>
Credit Card No <input type="text" placeholder="Enter Credit Card No" name="card"> <br/>
Address <input type="text" placeholder="Enter Address" name="live"> <br/>
Date of Birth <input type="date" name="bd"> <br/> <br/>
Mobile Number <input type="number" placeholder="Enter Mobile Number" name="mob"> <br/>
Passport <input type="text" placeholder="Enter Passport" name="pport"> <br/> 
Password <input type="password" placeholder="Enter Password" name="pass"> <br/> 


			<button type="submit" value="Add to Database">Sign Up</button> <br><br>
                        
		</form>
	</section>
<?php include 'Footer.php';?>
  </body> 
</html>
