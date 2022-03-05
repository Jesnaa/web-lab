
<?php
include "bookconnect.php";
if(isset($_POST['submit']))
{   
    $ano=$_POST['ano'];
    $title=$_POST['title'];
    $author=$_POST['author'];
    $edition=$_POST['edition'];
    $publisher=$_POST['publisher'];
    
    
    
$sql = "INSERT INTO `books` ( `ano`,`title`, `author`, `edition`, `publisher`) VALUES ( '$ano','$title', '$author', '$edition', '$publisher')";
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
    <head>
        <title>newcustomer</title>
    </head>
        
    <body>
        <form method="POST" action="">
                <h1>Register</h1><br>
                Ano<br>
                <input type="text" name="ano"  required><br>
                <br>
                Title<br>
                <input type="text" name="title"  required><br>
                Author<br>
                <input type="text" name="author" required><br>
                Edition<br>
                <input type="text" name="edition" required><br>
                Publisher<br>
                <input type="text" name="publisher" required>
                <br>
                <input type="submit" name="submit" value="register"><br><br><br><br><br>
        </form>
    </body>
</html>

