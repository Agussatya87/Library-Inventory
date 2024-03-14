<?php	
	include "../db_connection.php";

	$id = $_POST['book_id'];
	$judul = $_POST['Judul_buku'];
    $penulis = $_POST['Penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['Tahun_terbit'];
    $isbn = $_POST['ISBN'];
    $file = $_POST['gambar'];


	$query = "INSERT INTO buku VALUES ('$id', '$judul', '$penulis', '$penerbit', '$tahun', '$isbn', '$file')";

	$res = $conn->query($query);
	mysqli_close($conn);
	
	if($res){
		header("location:../admin_page.php?page=book");		
		echo '<script type="text/javascript"> window.alert("Data Berhasil Ditambahkan" </script>)';
	}
	else{	
		header("admin_page.php?page=book&status=error"); 		
		echo '<script type="text/javascript"> window.alert("Data Gagal Ditambahkan" </script>)';	
	}
 ?>