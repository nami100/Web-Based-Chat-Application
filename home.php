<!DOCTYPE html>
<html>
  <head>
    <title>Chat Application</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <!--Adding Navigation Bar--->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a font-size="15px" href="#" class="navbar-brand">Chat Application</a>
        </div>
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="nav navbar-nav  navbar-right">
            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
            <li><a href="about.php"><span class="glyphicon glyphicon-text"></span>About Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!---Adding Background image and jumbotron--->
    <div class="image">
      <div class="banner_content">
        <h1 style="color: dodgerblue;">Welcome to the Chat-Application</h1>
        <br>
        <br>
        <p style="font-weight: bold;font-family: sans-serif;font-size:20px;color: greenyellow">This chatting platform enables instant messaging, communicating, interacting and exchanging messages over the Internet.</p>
        <h2>Go Ahead</h2>
        <a href="login.php" class ="btn btn-danger btn-lg active">Click Here</a>
      </div>
      
    </body>
  </html>