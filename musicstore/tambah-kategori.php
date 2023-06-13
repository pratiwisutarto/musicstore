<?php
	session_start();
	include 'db.php';
	if($_SESSION['status_login'] !=true){ 
		echo '<script>window.location="login.php"  </script>';
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewreport" content="width=device-width, initial-scale=1">
	<title>PALMS MARKET</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
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

	<!--content-->
	<div class="section">
	<div class="container">
		<h3>Tambah Data Kategori</h3>
		<div class="box">
			<form action="" method="POST">
				<input type="text" name="nama" placeholder="Nama Kategori" class="input-control2" required>
	
				<input type="submit" name="submit" value="Submit" class="btn">
			</form>
			<?php 
			    if(isset($_POST['submit'])){
				$nama = ucwords($_POST['nama']);

				$insert = mysqli_query($conn, "INSERT INTO kategori VALUES (
					4,
					'".$nama."') ");

				if($insert){
					echo '<script>alert("Tambah data berhasil")</script>';
					echo '<script>window.location="data_kategori.php"</script>';
				}else{
					echo 'Gagal' .mysqli_error($conn);
				}
			}
		?>	
		</div>
	</div>

	<!--footer-->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2022 - PalmsMarket.</small>
		</div>
</div>
</body>
</html>