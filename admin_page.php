<?php
	session_start();	
	if(!isset($_SESSION['logged-in']))
	{		
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Inventory</title>
    <link rel="stylesheet" href="style/admin_page.css">
    <link rel="stylesheet" href="style/dashboard.css">
    <link rel="stylesheet" href="style/tabel.css">
    <link rel="stylesheet" href="style/modal.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container">
		<div id="page-h" class="page-header">
			<div class="page-logo">
				<img class="logo" src="logo.png" alt="logo">
			</div>
			<h3 class="menu-heading">Dashboard</h3>
			<a href="?page=dashboard"><i class="fa fa-tachometer fa-icon" aria-hidden="true"></i>Dashboard</a>
			<h3 class="menu-heading">Buku</h3>
	  		<a href="?page=book" ><i class="fa fa-book fa-icon" aria-hidden="true"></i>Daftar Buku</a>
		</div>	
		<div class="page-content">
			<div class="content-header">
				<span>Administrator</span>
				<img src="assets/admin2.png" class="icon" />
				<div class="admin-icon">
				<a class="link" href="logout.php">										
					<i class="fa fa-sign-out" aria-hidden="true"></i>
					<span>Logout</span>					
				</a>
				</div>			
			</div>

			<div class="content">				
				<?php
				if (isset($_GET['page'])) {
					$page = $_GET['page'];
					switch ($page) {
						case "dashboard":
							include "dashboard.php";
							break;
						case "book":
							include "book/book.php";
							break;												
					}
				}
				?>
			</div>		
		</div>
	</div>	
<!-- Custom JS -->
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="delete.js"></script>
</body>
</html>