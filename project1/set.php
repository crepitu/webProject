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

	//category
	$cat = 'SELECT cate, id FROM category';
	//query
	$resultCat = mysqli_query($conn, $cat);
	//fetch
	$category = mysqli_fetch_all($resultCat, MYSQLI_ASSOC);
	//free
	mysqli_free_result($resultCat);
	//close connection
	mysqli_close($conn);

	//print_r($questions);


?>
