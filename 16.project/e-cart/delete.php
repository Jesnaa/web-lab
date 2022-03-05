<?php
include 'db_connection.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `registration` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:people.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}
?>