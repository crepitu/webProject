<?php 
	if(isset($_POST['addQuestion']))
	{
		header('Location: add.php');
	}
?>





<!DOCTYPE html>
<html>
<head>
	<title>USER PAGE</title>
	<!-- Compiled and minified CSS -->
  <link href="materialize\css\materialize.css" rel="stylesheet" >
  <style type="text/css">
	  .brand{
	  	background: #cbb09c !important;
	  }
  	.brand-text{
  		color: #ffffff !important;
  	}
  	form{
  		max-width: 460px;
  		margin: 20px auto;
  		padding: 20px;
  	}
  	.side-nav {
    transform: translateX(0%) !important;  
}

body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }
  </style>
  
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
</head>
<body class="grey lighten-4">
<header>
    <nav class="nav-wrapper purple">
		 <div class="navbar-fixed">
      <div class="container">
		  <img class="hide-on-med-and-down" src="u.png" alt="logo" />
        <a href="./index.php" class="brand-logo">Unika</a>
        <a href="#" class="sidenav-trigger" data-target="swipe">
          <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a class="waves-effect" href="../user/credentials/login.php">Login</a></li>
          <li><a class="waves-effect" href="../user/credentials/register.php">Register</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>

</html>

