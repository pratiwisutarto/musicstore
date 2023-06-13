<?php 
	session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bukawarung</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&family=Work+Sans:wght@400;500;700&display=swap"
    rel="stylesheet">
</head>
<body>
	<!-- header -->
	<header>
 		<div class="container">
 		<h1><a href="dashboard.php">Music Store</a></h1>
 		<ul>
 			<li><a href="dashboard.php">Dashboard</a></li>
			<li><a href="data_kategori.php">Data Kategori</a></li>
			<li><a href="data_produk.php">Data Produk</a></li>
			<li><a href="keluar.php">Log out</a></li>
		</ul>
	</div>
	</header>

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Dashboard</h3>
			<div class="box">
				<h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> di Website Toko Musik!</h4>
			</div>
		</div>
	</div>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2023 - Kelompok 1E.</small>
		</div>
	</footer>
</body>
</html>