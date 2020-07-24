<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Video Call</title>
		
		<style>
		body{
			background-image: url(images/chat3.png);
			background-repeat: no-repeat;
			background-size: cover;
			overflow-x: hidden;
		}
		#container {
			margin: 0px auto;
			width: 500px;
			height: 375px;
			border: 10px black solid;
		}
		#videoElement {
			width: 500px;
			height: 375px;
			background-color: #666;
		}
		</style>
	</head>
	
	<body>
		<!--Adding Heading--->
		<div class="container">
			<h1 style="color: deepskyblue;text-align: center; background-color: white;width: 30%;margin-left: 470px;">Video call is going on..</h1>
		</div>
		<!---Adding Video Tag--->
		<div id="container">
			<video autoplay="true" id="videoElement">
				
			</video>
		</div>
		<script>
		var video = document.querySelector("#videoElement");
		if (navigator.mediaDevices.getUserMedia) {
		navigator.mediaDevices.getUserMedia({ video: true })
		.then(function (stream) {
		video.srcObject = stream;
		})
		.catch(function (err0r) {
		console.log("Something went wrong!");
		});
		}
		</script>
		<br>
		<form action="logout.php">
			<input style="color: black solid;font-size:20px;width: 30%; margin-left: 470px;background-color:#6495ed;border: 10px solid #6495ed;" type="submit" value="End Video Call" type="submit" >
		</form>
	</body>
</html>