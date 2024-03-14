<?php

	include "../db_connection.php";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		echo $id;

		$sql = "DELETE FROM buku WHERE book_id='$id'";
		
		if ($conn->query($sql) === TRUE) {
		   	header("location:../admin_page.php?page=book");
		} else {
		   	echo "Error: ". $sql ."<br>". $conn->error;
		}
	}		
?>