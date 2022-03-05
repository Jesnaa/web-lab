<?php
include "config.php";
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
 
$sql = "INSERT INTO `local` ( `name`, `email`, `password`) VALUES ( '$name', '$email', '$password')";
$result=$conn->query($sql);
if($result==TRUE)
{
    echo "new record created successfully";
}
else
{
    echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
}
?>
<html>
<body>
<h2> Signup Form </h2>
<form action="" method="POST">
<fieldset>
<legend> Personal Information </legend>
First Name:<br>
<input type="text" name="name">
<br>
Email:
<br>
<input type="email" name="email">
<br>
Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit" value="submit">
</fieldset>
</body>
</html>
 
