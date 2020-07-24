<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Chat Application</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          
          </button>
          <a font-size="15px" href="home.php" class="navbar-brand">Chat Application</a>
        </div>
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="nav navbar-nav  navbar-right">
            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
            <li><a href="home.php"><span class="glyphicon glyphicon-text"></span>About Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="banner-image" >
      <div class="col-sm-4 col-sm-offset-4">
        <div class="panel">
          <div class="panel-heading">
            <h4>
            LOGIN
            </h4>
          </div>
          <form action="validation.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Name" name="name"  pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password"  pattern=".{6,}" name="password" required>
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary ">Login</button>
            </div>
            <div class="col-sm-10">
              New User ?<a href="signup.php">Registor</a>
            </div>
          </form>
          
        </div>
      </div>
    </div>
    
    
    
  </body>