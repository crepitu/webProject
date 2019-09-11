<?php 
	include ('set.php'); 
	$session=session_name();
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: user/credentials/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: user/credentials/login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>USER</title>
	<!-- Compiled and minified CSS -->
  <link href="materialize\css\materialize.css" rel="stylesheet" >
  <style type="text/css">
	  .brand{
	  	background: #cbb09c !important;
	  }
  	.brand-text{
  		color: #ffffff !important;
  	}
  	form, .content {
  width: 100%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 10px 10px 10px 10px;
}
  	.side-nav {
    transform: translateX(0%) !important;  
}
label{
font-family: "Times New Roman", Times, serif;
font-size: 50px;
}

body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
    background: url("back.jpg");
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
        <a href="#" class="sidenav-trigger" data-target="swipe"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a class="waves-effect" href="./user/credentials/login.php">Login</a></li>
          <li><a class="waves-effect" href="./user/credentials/register.php">Register</a></li>
	  <li><a class="waves-effect" href="index.php?logout='1'" >logout</a> </li>
        </ul>
      </div>
    </nav>
  </div>  
</header>
<main>
	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
   
</div>
  <ul class="sidenav" id="swipe">
 		   <li><a class="brand-logo"><img src="unika.png" alt="logo" /></a></li>
 		   <br>
 		   <li><a class="brand-logo">User<div></li>
         	  <li><a class="waves-effect" href="user/credentials/login.php">Login</a></li>
            <li><a class="waves-effect" href="user/credentials/register.php">Register</a></li>
</ul>
<br><br><br><br>
<div class="container">
<form>
	 <?php  if (isset($_SESSION['username'])) : ?>
    	
    <a class='dropdown-trigger btn' href='#' data-target='dropdown1'>Drop Me!</a>
	<label class="right" style="font-size:1.5vw; font-weight: bold;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></label>	
    <?php endif ?>
  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
	<?php 
		foreach($category as $cat)
		{$value++;?>
          <li> <?php echo htmlspecialchars($cat['cate']); ?></li>
 
	<?php  } ?>
 </ul>

</form>
</div>
  <div class="container">
<form class="responsive-form">
  <table class="responsive-table">

		<tr>
             		<th>Question</th>
            		<th>1</th> 
            	 	<th>2</th>
             	 	<th>3</th>
             	 	<th>4</th>
             	 	<th>5</th>
		</tr>
			  	<?php 
		foreach($questions as $que)
		{$value++;
		?>
			<tr>
          			<td> <?php echo htmlspecialchars($que['que']); ?></td>
          			<td>  <label> <input name=<?php echo $value; ?> type="radio" />  <span></span></label></td>
				<td>  <label> <input name=<?php echo $value; ?> type="radio" />  <span></span></label></td>
				<td>  <label> <input name=<?php echo $value; ?> type="radio" />  <span></span></label></td>
				<td>  <label> <input name=<?php echo $value; ?> type="radio" />  <span></span></label></td>
				<td>  <label> <input name=<?php echo $value; ?> type="radio" />  <span></span></label></td>
      			</tr>
			
		<?php  } ?>
		 
    </table>
    <ul id="nav-mobile" class="right">
		<li>
		<a class="waves-effect waves-light btn">Submit</a>
		</li>
      </ul>
     
    </form>
  </div>
</div>
    <br><br><br><br><br><br><br><br>
</main>

  
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
</body>
<footer><?php include('user/templates/footer.php'); ?></footer>
</html>
