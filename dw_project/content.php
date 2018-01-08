<!DOCTYPE html>
<?php
include_once 'proses/koneksi.php';
	function excerpt($string){
		$string= substr($string, 0 , 200);
		return $string."........";
	}
	error_reporting(0);
	$batas=2;
	$halaman=$_GET['halaman'];
	if (empty($halaman)) {
		$posisi=0;
		$halaman=1;
	}
	else{
		$posisi=($halaman-1)*$batas;
	}

?>
<html>
<head>
	<title>Latihan Desain</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- bagian header template -->
	<header>
		<img src="gambar/header1.png">
	</header>
	<!-- akhir bagian header template -->
	
	<div class="wrapper">
		<!-- bagian menu		 -->
		<nav class="main-navigation">
			<ul class="menu">
				<li><a href="index.html">Home</a></li>
				<li class="has-mega-menu"><a href="#">Tutorial</a>
					<div class="mega-menu">
						<div class="column">
							<div class="col">
								<h3>Web Development</h3>
								<ul>
									<li>HTML & CSS</li>
									<li>Javascript</li>
									<li>PHP</li>
									<li>Wordpress</li>
								</ul>
							</div>
							<div class="col">
								<h3>Web Design</h3>
								<ul>
									<li>Photoshop</li>
									<li>Sketch</li>
									<li>Macaw</li>
									<li>Gimp</li>
								</ul>
							</div>
							<div class="col">
								<h3>Browser</h3>
								<ul>
									<li>Chrome</li>
									<li>Firefox</li>
									<li>Internet Explorer</li>
									<li>Opera</li>
								</ul>
							</div>
						</div>
					</div>
				</li>
				<li><a href="about.html">About</a></li>
			</ul>
		</nav>
		<!-- akhir bagian menu -->

		<!-- bagian sidebar website -->
		<aside class="sidebar">
			<div class="widget">
				<h2>Widget</h2>
				<p></p>
			</div>
			<div class="widget">
				<h2><a href="#" id="loginform">Login</a></h2>
    			 <div class="login">
      				<div class="arrow-up"></div>
      					<div class="formholder">
        					<div class="randompad">
           					<fieldset>
           						<form action="proseslogin.php" method="POST">
             					<label>Email</label>
             					<input type="email" name="email" placeholder="Email" />
             					<label>Password</label>
             					<input type="password" name="password" placeholder="Password" />
             					<input type="submit" value="login" />
             					</form>
           					</fieldset>
        					</div>
      					</div>
    			</div>
    			<br/>
    			<p>Jika belum memiliki akun silahkan <a href="signup.html">Register</a> </p>
			</div>
		</aside>
		<!-- akhir bagian sidebar website -->

		<!-- bagian konten Blog -->
		<div class="blog">
			<?php
			$id=$_GET['id'];
				$cari=mysql_query("SELECT *FROM tutorial WHERE id_tutorial='$id'");
				while ($tampil=mysql_fetch_array($cari)) {
				?>
			<div class="content">
				<div class="post-info">
					<p></p>
				</div>
				<h1><?php echo $tampil['judul']; ?></h1>
				<hr>
				<p>
					<?=($tampil['data']); ?>
				</p>
				<a href="index.php" >Back to Home</a>				
			</div>
			<?php
		}
	
	?>
			
		</div>
		<!-- akhir bagian konten Blog -->
	</div>
	<footer>
		<img src="gambar/footer1.png">
	</footer>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="index.js"></script>
</body>
</html>