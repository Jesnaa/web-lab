<?php
include 'db_connection.php';
	
if(isset($_POST['log']))
{
    $mail=$_POST['uname'];
    $pass=$_POST['pswd'];

$result=mysqli_query($con,"SELECT * FROM `login_db` WHERE email='$mail' and  `password`='$pass'");

while($row=mysqli_fetch_array($result)){
    if($row['roll']==0){
        header('location:admin.html');
    }
    if($row['roll']==1){
        header('location:index.html');
    }
    else{
        echo '<script> alert("enter valid login credential"); </script>';
    }
}
echo '<script> alert("Enter valid login credential"); </script>';
}

?>

<html>
<head>

	<title>E-Cart</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body  background="image.jpg">
	<div class="container">
		<div class="header">
			<div class="logo">
				<p class="logo-text">BIG BASKET</P>
				
			</div>
			<div class="main">
				<form >
					<table class="controls">
						<tr>
							<td><a class="table" href="index.php">HOME</a></td>
							<td><a class="table" href="about.php">ABOUT US</a></td>
							<td><a class="table" href="contact.php">CONTACT US</a></td>
							<td><a class="table" href="login.php">LOGIN</a></td>
						</tr>
				    </table>
				</form>
				
			</div>
		</div>
		
	</div>
	<div class="main-body">
		<div class="center">
                   <form action = "#" method = "post">
		   <p class="para">LOGIN</p>
		   <label class="details">Username</label>	
		   <input type="text" class="size" placeholder="Enter your name" name = "uname" required="required"><br><br>
		   <label class="details">Password</label>	
		   <input type="Password" class="size" placeholder="Enter your Password" name ="pswd" required="required"><br><br>
		   <input type="submit" name="log" class="button" value="Login">
		   <table>
		   	<tr>
		   		<td class="text2">Don't have an account?</td>
		   		<tr>
		   			<td><a class="signup" href="register.php">Sign up</a></td>
		   		</tr>
		   	</tr>
		   </table>
                  </form>
		</div>
	</div>
	
</body>
</html>