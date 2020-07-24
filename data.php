<?php
include'db.php';
//Fetching data 
$msg=$_POST['msg'];
$name=$_POST['name'];
//Inserting data into the values
$sql="INSERT into chat(name,msg) values('$name','$msg')";
$result=mysqli_query($con,$sql);
header("location:index.php");


?>