<?php
	session_start();
	//must assure every single page in website has this!
	
	include 'dbh.php';
	//connect to database
	
	if(isset($_POST['deleteImg'])) {
		
		$delete_Img = $_POST['id'];

		$sql_One = "DELETE FROM aboutSK WHERE ID = '$delete_Img'";
		$result_One = mysqli_query($conn, $sql_One);

		if($result_One) {
			header("Location: aboutAdmin.php?delete=success");
		} else {
			header("Location: aboutAdmin.php?delete=failed");
		}
	} 
	else if(isset($_POST['deletePost'])) {
		$delete_Post = $_POST['id'];

		$sql_Two = "DELETE FROM aboutSK WHERE ID = '$delete_Post'";
		$result_Two = mysqli_query($conn, $sql_Two);

		if($result_Two) {
			header("Location: aboutAdmin.php?delete=success");
		} else {
			header("Location: aboutAdmin.php?delete=failed");
		}
	}
?>