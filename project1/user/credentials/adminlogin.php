<?php include('db_connect.php') ?>
<!DOCTYPE html>
<html>
<head>
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
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 	 <header>
    <nav class="nav-wrapper purple">
		 <div class="navbar-fixed">
      <div class="container">
		  <img class="hide-on-med-and-down" src="u.png" alt="logo" />
        <a href="../../index.php" class="brand-logo">Unika</a>
        <a href="#" class="sidenav-trigger" data-target="swipe">
          <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a class="waves-effect" href="./login.php">Login</a></li>
          <li><a class="waves-effect" href="./register.php">Register</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>
<main>
  <ul class="sidenav" id="swipe">
 		   <li><a class="brand-logo"><img src="unika.png" alt="logo" /></a></li>
 		   <br>
 		   <li><a class="brand-logo">User<div></li>
         	  <li><a class="waves-effect" href="./login.php">Login</a></li>
            <li><a class="waves-effect" href="./register.php">Register</a></li>
</ul>	 
<br><br>
  <form method="post" action="adminlogin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="administrator">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
		Admin login here: <a href="adminlogin.php">administrator</a>
  	</p>
  </form>
</body>
</main>
<footer>
<?php include('../../user/templates/footer.php'); ?>
</footer>
  <script src="materialize\js\materialize.min.js"></script>
  <script>
  
       document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, 'swipe');
  });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, dropdown1);
  });
</script>
</html>
