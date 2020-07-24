  
<?php
session_start();
//connection of php to database
$con = mysqli_connect("localhost", "root", "", "simplechat");
mysqli_select_db($con,'simplechat');
//Fetching data using Post method
$email1 =$_POST['email'];
$password1 =$_POST['password'];
//Selecting data which is  equal to the values added during signup
$q="SELECT * from items where password='$password1' && email='$email1'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
   header('location:index.php');
} else{

header('location:signup.php');}

?>