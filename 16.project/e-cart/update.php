<?php
include 'db_connection.php';


$id=$_GET['updateid'];
$sql="select *from `registration`";
$result=mysqli_query($con,$sql);
$row1=mysqli_fetch_assoc($result);
$name=$row1['name'];
$mail=$row1['email'];
$mobile=$row1['phon'];
$dob=$row1['dob'];
$gender=$row1['gender'];
$pass=$row1['password'];

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$mail=$_POST['email'];
	$mobile=$_POST['phon'];
	$dob=$_POST['dob'];
    $gender=$_POST['gender'];
	$pass=$_POST['password'];
$sql ="update `registration` set id=$id,name='$name',email='$mail',phon='$mobile',dob='$dob',gender='$gender',password='$pass' where id=$id";
$result=$con->query($sql);
if($result==TRUE)
{
    header('location:people.php');
}
else
{
	echo "Error".$sql."<br>".$con->error;
}
$con->close();
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
		<div class="center-main">
		<p class="signup1">SIGNUP</p>
		<form method="post">
			<table class="data">
				<tr>
					<td><label for="Firstname" class="label-title"> Name
					</label></td>
					<td><input type="text" class="form-input" name="name" placeholder="Enter your first name" required="required"/></td>
				</tr>
				
				<tr>
					<td><label for="email" class="label-title">Email
					</label></td>
					<td><input type="email" id="email" class="form-input" name="email" placeholder="Enter your email" required="required"></td>
				</tr>
				<tr>
					<td><label for="phone" class="label-title">PhoneNumber
					</label></td>
					<td><input type="text" class="form-input" placeholder="Enter your phone number" name="phon" required="required"></td>
				</tr>
				<tr>
					<td><label class="label-title">Date-of-Birth
					</label></td>
					<td><input type="date" class="form-input" name="dob"></td>
				</tr>
				<tr>
					<td><label type="text" class="label-title">Gender</label></td>
				    <td> <input type="radio" value="male" name="gender">Male <input type="radio" value="female" name="gender">Female<br></td>
				</tr>
				<tr>
					<td><label class="label-title">Password</td>
					<td><input type="Password" class="form-input"name="password" ></td>
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