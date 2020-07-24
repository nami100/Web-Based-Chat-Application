  
<?php
session_start();
header('location:login.php');
$con = mysqli_connect("localhost", "root", "", "simplechat");
mysqli_select_db($con,'simplechat');
  
$name1 =$_POST['name'];
$email1 =$_POST['email'];
$password1 =$_POST['password'];
$contact1 =$_POST['contact'];
$q="SELECT * from items where name='$name1'&& password='$password1'&& email='$email1'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
  echo"already exist";
} else{

$qy = "INSERT INTO items(name,email,password,contact)values('$name1','$email1', '$password1', '$contact1')";
    mysqli_query($con,$qy);}


?>