<?php 
$conn = mysqli_connect('localhost', 'admin', 'admin', 'projectone');
if(!$conn)
{
	echo 'connection error'. mysqli_connect_error();
}
$question= '';
	$errors=array('question'=>'');
	if(isset($_POST['submit'])){

		
		
		// check email
		if(empty($_POST['question'])){
			$errors['question']= 'A question is required <br />';
		} 

	 // end POST check

if(array_filter($errors))
{
	
}else
{
	$question=mysqli_real_escape_string($conn, $_POST['question']);

	$sql = "INSERT INTO question(que) VALUES('$question')";

	if(mysqli_query($conn, $sql))
	{	
		header('Location: index.php');
	}else
	{
		echo 'query error:'. mysqli_error($conn);
	}


	
}
	}
?>

<!DOCTYPE html>
<html>
	
	<header><?php include('templates/header.php'); ?></header>
	<main>
	<section class="container grey-text">
		<h4 class="center">Add a question</h4>
		<form class="white" action="add.php" method="POST">
			<label>Question:</label>
			<input type="text" name="question" value="<?php echo $question ?>">
			<div class="red-text"><?php echo $errors['question']; ?></div>
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>
	</main>
	<footer><?php include('templates/footer.php'); ?></footer>

</html>