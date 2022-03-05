
<?php
	include 'db_connection.php';
$sql="SELECT * FROM `registration`";
$result=$con->query($sql);
?>

<html>
<head>
	<title>E-CART</title>
	<link rel="stylesheet" type="text/css" href="p.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="image.jpg">
	<div class="container">
		<div class="header">
			<div class="logo">
				
				
			</div>
			<div class="main">
				<form>
					<table class="controls">
						<tr>
							<td><a class="table" href="admin.html">HOME</a></td>
							<td><a class="table" href="about.php">USER</a></td>
							
							<td><a class="table" href="login.php">LOGIN</a></td>
						</tr>
				    </table>
				</form>
				
			</div>
		</div>
		
	</div>
  
<table>
  <tr>
  
    <th>NAME</th>
    <th>EMAIL</th>
    <th>PHONE NO.</th>
    <th>DOB</th>
    <th>Gender</th>
    <th>delete</th>
    <th>update</th>

   
    
  </tr>

  <?php
  if($result->num_rows>0)
  {
    while($row=$result->fetch_assoc())
    {
      
  ?>
  <tr>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['phon'];?></td>
    <td><?php echo $row['dob'];?></td>
    <td><?php echo $row['gender'];?></td>
    <td><a href="delete.php ?deleteid=<?php echo $row['id'];?>">
            <input type="submit" name="delete" style="background:red;" value="Remove"></a></td>
            <td><a href="update.php ?updateid=<?php echo $row['id'];?>">
            <input type="submit" name="update" style="background:red;" value="update"></a></td>
    
  </tr>
  <?php
            }
          }
          ?>
  
</table>
      
</body>
</html>