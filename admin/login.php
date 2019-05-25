<?php 
	session_start();
?>
<html>
<head>
<!--<link rel="stylesheet" type="text/css" href="style.css">-->
	<title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">IF Hotel</a>
	    </div>
	  </div>
	</nav>
  
	<div class="container">
	  <h2>Login</h2>
	  <form action="proses_login.php" method="POST">
	    <div class="form-group">
	      <label>Username</label>
	      <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
	    </div>
	    <div class="form-group">
	      <label>Password</label>
	      <input type="password" class="form-control" name="pass" placeholder="Masukkan password">
	    </div>
	    <input type="submit" value="LOGIN" class="btn btn-default"></input>
	  </form>
	</div>

</body>
</html>