<?php
	include "db_connection.php";

	$sql = "SELECT * FROM buku";
	$buku = mysqli_query($conn, $sql);

	$jumlah_buku = 0;
	if (mysqli_num_rows($buku) > 0) {
		$jumlah_buku = mysqli_num_rows($buku);
	}   	
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<main class="main-container">
	<div class="main-title">
          <p class="font-weight-bold">DASHBOARD</p>
        </div>
	<div class="main-cards">
		<div class="card">
			<div class="card-inner">
              <p class="text-primary">BUKU</p>
              <span class="material-symbols-outlined">menu_book</span>
            </div>
			<span class="text-primary font-weight-bold"><?php echo $jumlah_buku?></span>
		</div>
	</div>
</main>