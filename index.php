<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Chat Application</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style>
		body{
		background-image: url(images/chat1.jpg);
		background-repeat: no-repeat;
		background-size: cover;
		overflow-x: hidden;
		}
		
		</style>
	</head>
	<body>
		<div id="main">
			<!--Adding Heading to the chat app-->
			<h1 style="background-color: cornflowerblue;text-align: center;margin-top:0px; ">Lets Chat!
			</h1>
			<div class="output">
				<?php
				include'db.php';
				//Selecting data from the database table
				$sql="SELECT * from chat";
				$result=mysqli_query($con,$sql);
				$num=mysqli_num_rows($result);
				if($num>0)
				{    //Fetching data into values
					while($row=mysqli_fetch_array($result)){
						echo"".$row['name']." ".$row['msg']."--".$row["date"]."<br>";
						echo"<br>";}
				}else{echo"0 results";
				}
				?>
			</div>
				<form method="POST" action="data.php">
					<textarea name="name" placeholder="Enter Your Name" class="form-control"></textarea>
					<textarea name="msg" placeholder="Type to send message here" class="form-control"></textarea>
					<input style="width: 100%;color: black;font-size: 15px;background-color: limegreen;" type="submit" value="Send" class="btn btn-success">
				</form>
				
				<form action="logout.php">
					<input style="color: black;font-size:15px;width: 100%;background-color:lightskyblue;" type="submit" value="Logout" type="submit" class="btn btn-primary">
				</form>
				
				<form action="vid.php">
					<input style="color: black;font-size: 15px;width: 100%;background-color: red;" type="submit" value="Video Call" type="submit" class="btn btn-danger">
				</form>
			</div>
		</body>
	</html>