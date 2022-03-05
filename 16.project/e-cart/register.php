<?php
	include 'db_connection.php';
	
if(isset($_POST['submit']))
{
	$name=$_POST['fname'];
	$email=$_POST['email'];
    $Phon=$_POST['ph_no'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
	$Password=$_POST['pwd'];
   	$sql="INSERT INTO `registration`(`name`,`email`, `phon`,`dob`,`gender`,`password`) 
	   VALUES('$name','$email', '$Phon','$dob','$gender','$password')";
	 $result=mysqli_query($con,$sql);
	if($result==TRUE){

		if(isset($_POST['submit']))
		{
			$email=$_POST['email'];
			$password=$_POST['pwd'];
		   //  $role=$_POST['1'];
			$sql="INSERT INTO `login_db` (`email`,`password`,`roll`)
			  values('$email','$password',1)";
			  $result=mysqli_query($con,$sql);
		}
      
        header('location:login.php');
         
     }else{
        die("error:could not connect" .mysqli_connect_error($con));    
     }
}
?>


<html>
<head>
	<title>E-CART</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="image.jpg">
	<div class="container">
		<div class="header">
			<div class="logo">
				<p class="logo-text">BIG BASKET</P>
				
			</div>
			<div class="main">
				<form>
					<table class="controls">
						<tr>
							<td><a class="table" href="index.html">HOME</a></td>
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
		<div class="center-main">
		<p class="signup1">SIGNUP</p>
		<form method="post">
			<table class="data">
				<tr>
					<td><label for="Firstname" class="label-title"> Name
					</label></td>
					<td><input type="text" class="form-input" name="fname" placeholder="Enter your first name" required="required"/></td>
				</tr>
				
				<tr>
					<td><label for="email" class="label-title">Email
					</label></td>
					<td><input type="email" id="email" class="form-input" name="email" placeholder="Enter your email" required="required"></td>
				</tr>
				<tr>
					<td><label for="phone" class="label-title">PhoneNumber
					</label></td>
					<td><input type="text" class="form-input" placeholder="Enter your phone number" name="ph_no" required="required"></td>
				</tr>
				<tr>
					<td><label class="label-title">Date-of-Birth
					</label></td>
					<td><input type="date" class="form-input" name="dob"></td>
				</tr>
				<tr>
					<td><label type="text" class="label-title">Gender</label></td>
				    <td> <input type="radio" value="male" name="gender">Male  <input type="radio" value="female" name="gender">Female<br></td>
				</tr>
				<tr>
					<td><label class="label-title">Password</td>
					<td><input type="Password" class="form-input"name="pwd" ></td>
				</tr>
		
				<tr>
					<td><input type="submit" class="btnn" name="submit" value="Submit"></td>
				</tr>
			</table>
        </form>
				
		</div>
	</div>
	
</body>
</html>