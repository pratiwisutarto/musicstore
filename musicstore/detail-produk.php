<?php 
	error_reporting(0);
	include 'db.php';
	$produk = mysqli_query($conn, "SELECT * FROM produk WHERE product_id = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($produk);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Music Store</title>
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

		<h1>
      <img src="produk/Logo.jpg" width="50px" style="margin-bottom: -12px;">
        <a href="home.php">Music Store</a>
      </h1>
			<ul>
				<li><a href="Login.php">Admin</a></li>
			</ul>
		</div>
	</header>

	<!-- search -->
	<div class="search">
		<div class="container">
			<form action="produk.php">
				<input type="text" name="search" placeholder="Cari Produk" value="<?php echo $_GET['search'] ?>">
				<input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
				<input type="submit" name="cari" value="Cari Produk">
			</form>
		</div>
	</div>

	<!-- product detail -->
	<div class="section">
		<div class="container">
			<h3>Detail Produk</h3>
			<div class="box">
				<div class="col-2">
					<img src="produk/<?php echo $p->product_image ?>" width="100%">
				</div>
				<div class="col-2">
					<h3><?php echo $p->product_name ?></h3>
					<h4>Rp. <?php echo number_format($p->product_price) ?></h4>
					<p>Deskripsi :<br>
						<?php echo $p->product_description ?>
					</p>
					<p><a href="https://api.whatsapp.com/send?phone=<?php echo $a->admin_telp ?>&text=Hai, saya tertarik dengan produk Anda." target="_blank">
						Hubungin via Whatsapp
						<img src="img/wa.png" width="50px"></a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<h4>Alamat</h4>
			<p>Jl. Piere Tendean, Sario Tumpaan,. Kec. Sario, Kota Manado, Sulawesi Utara 95114.</p>

			<h4>Email</h4>
			<p>Currently Unavailable</p>

			<h4>No. Hp</h4>
			<p>Currently Unavailable</p>
            
	<small>       
        Copyright 2023 | For Assignment Purpose Only. <b>- Kelompok E1 </b>
    </small>
		</div>
	</div>
</body>
</html>