<?php	
	$old_id = $_POST['old_book_id'];
	$id = $_POST['book_id'];
	$judul = $_POST['Judul_buku'];
    $penulis = $_POST['Penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['Tahun_terbit'];
    $isbn = $_POST['ISBN'];
    $gambar = $_POST['gambar'];
	
	include "../db_connection.php";

	$query = "UPDATE buku SET book_id='$id', Judul_buku='$judul', Penulis='$penulis', penerbit='$penerbit', Tahun_terbit='$tahun', ISBN='$isbn', gambar='$gambar' WHERE book_id='$old_id'";	

	$res = $conn->query($query);
	mysqli_close($conn);
	
	if($res){
		header("location:../admin_page.php?page=book");		
	}
	else{		
		header("location:../admin_page.php?page=book&status=error"); 		
	}	
?>