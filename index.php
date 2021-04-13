<?php
	require 'dbconfig/config.php';
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
		<center><h2>Login to continue</h2></center>
		<center><img  src="https://m.hindustantimes.com/rf/image_size_640x362/HT/p2/2016/07/09/Pictures/_9602fe7e-4594-11e6-80db-dfffb1de8362.jpg"  class="avatar"></center>
	
	<form class="myform" 	action="index.php" method="post">
		<label><b>Username:</b></label><br>
		<input name="username" type="text" class="inputvalues" placeholder="Type your Username" required><br>
			<label><b>Password:</b></label><br>
		<input name="password" type="password" class="inputvalues" placeholder="Type your Password" required><br>
		<input name="login" type="submit" id="login_btn" value="Login" ><br>
		<a href="register.php"><input name="submit_btn" type="button" id="register_btn" value="Register" ></a>
	</form>
	<?php
		if(isset($_POST['login']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$query= "select * from userinfo WHERE username='$username' AND password='$password'";
			$query_run = mysqli_query($con, $query);
			if(mysqli_num_rows($query_run)>0)
			{
				$_SESSION['username']= $username;
				header('location:worldcric.php');
				
			}
			else
			{
				echo '<script type="text/javascript">alert("Invalid credentials")</script>';
			}
		}
	?>


</body>
</html>