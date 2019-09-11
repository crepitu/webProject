<?php 
	include('config/db_connect.php');

	

	//$conn = mysqli_connect('localhost', 'admin', 'admin', 'projectone');
	$value = 0;
	if(!$conn)
	{
		echo 'connection error'. mysqli_connect_error();
	}
	//write query
	$sql = 'SELECT que, id FROM question';
	//query
	$result = mysqli_query($conn, $sql);
	//fetch
	$questions = mysqli_fetch_all($result, MYSQLI_ASSOC);
	//free
	mysqli_free_result($result);
	//close connection
	mysqli_close($conn);

	//print_r($questions);

?>

<!DOCTYPE html>
<html>


<body>
	<header><?php include('templates/header.php'); ?></header>
	<main>
	<h4 class="center grey-text">question</h4>


  

	<div class = "container">
	<table style="width:100%">
            <colgroup>
              <col style="width: 60%">
              <col style="width: 5%" >
              <col style="width: 5%" >
              <col style="width: 5%" >
              <col style="width: 5%" >
			  </colgroup>
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
                <td>  <label> <input name=<?php echo $value; ?> type="radio" />  <span></span></label>
				<td>  <label> <input name=<?php echo $value; ?> type="radio" />  <span></span></label>
				<td>  <label> <input name=<?php echo $value; ?> type="radio" />  <span></span></label>
				<td>  <label> <input name=<?php echo $value; ?> type="radio" />  <span></span></label>
				<td>  <label> <input name=<?php echo $value; ?> type="radio" />  <span></span></label>
				
			 </tr>
			
		<?php  } ?>
		
    </table>
	</div>
	<div class="container">
      <ul id="nav-mobile" class="right hide-on-small-and-down">
        <li>
		<a class="waves-effect waves-light btn" href="add.php">Add Question</a>
		</li>
		<br>
		<li>
		<a class="waves-effect waves-light btn">Add Category</a>
		</li>
      </ul>
    </div>
	
</main>
	<footer><?php include('templates/footer.php'); ?></footer>

  
</body>
</html>