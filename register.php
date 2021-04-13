<?php
	require 'dbconfig/config.php'
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>World_Cricket</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@100&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Text&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
</head>
<body style="background-color: black;">
	<section>
		<div class="C1" style="color: white; text-align: center;">WORLD CRICKET <ins style="margin: right; text-decoration: none;font-size: 20px; font-family: verdana;"> </ins> </div>
	</section>
	<div id="main-wrapper">
		<center><h2>Register</h2></center>
		<center><img  src="https://m.hindustantimes.com/rf/image_size_640x362/HT/p2/2016/07/09/Pictures/_9602fe7e-4594-11e6-80db-dfffb1de8362.jpg"  class="avatar"></center>
	
	<form class="myform" 	action="register.php" method="post">
		<label><b>Username:</b></label><br>
		<input name="username" type="text" class="inputvalues" placeholder="Type your Username" required><br>
			<label><b>Password:</b></label><br>
		<input name="password" type="password" class="inputvalues" placeholder="Type your Password" required><br>
		<label><b>Confirm Password:</b></label><br>
		<input name="cpassword" type="password" class="inputvalues" placeholder="Type your Password again" required><br>
		<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up" ><br>
		<a href= "index.php"><input type="button" id="back_btn" value="Back"></a>
	</form>
	<?php
		if(isset($_POST['submit_btn']))
		{
			//echo '<script type="text/javascript"> alert("Sign Up Button Clicked")</script>';
			$username = $_POST['username'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];
			
			if($password==$cpassword)
			{
				$query = "select * from userinfo WHERE username='$username'";
				$query_run = mysqli_query($con, $query);
				
				if(mysqli_num_rows($query_run)>0)
				{
					echo '<script type="text/javascript"> alert("Username exists..please try another username")</script>';
				}
				else
				{
					$query= "insert into userinfo values ('$username','$password')";
					$query_run = mysqli_query($con,$query);
					
					if($query_run)
					{
						echo '<script type="text/javascript"> alert("User successfully registered..Go to login page to continue")</script>';
					}
					else
					{
						echo '<script type="text/javascript"> alert("Error!")</script>';
					}
				}
			}
			else{
				echo '<script type="text/javascript"> alert("Password and confirm password does not match")</script>';
			}
		}
	?>
</div>
</body>

	</html>