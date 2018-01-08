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
				<li><a href="index.php">Home</a></li>
				<li class="has-mega-menu"><a href="#">Tutorial</a>
					<div class="mega-menu">
						<div class="column">
							<div class="col">
								<h3>Web Development</h3>
								<ul>
									<li><a href="#">HTML & CSS</a></li>
									<li><a href="#">Javascript</a></li>
									<li><a href="#">PHP</a></li>
									<li><a href="#">Wordpress</a></li>
								</ul>
							</div>
							<div class="col">
								<h3>Web Design</h3>
								<ul>
									<li><a href="#">Photoshop</a></li>
									<li><a href="#">Sketch</a></li>
									<li><a href="#">Macaw</a></li>
									<li><a href="#">Gimp</a></li>
								</ul>
							</div>
							<div class="col">
								<h3>Browser</h3>
								<ul>
									<li><a href="#">Chrome</a></li>
									<li><a href="#">Firefox</a></li>
									<li><a href="#">Internet Explorer</a></li>
									<li><a href="#">Opera</a></li>
								</ul>
							</div>
						</div>
					</div>
				</li>
				<li><a href="about.php">About</a></li>
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
           						<form action="proses/proseslogin.php" method="POST">
             					<label>Email</label>
             					<input type="email" name="email" placeholder="Email" />
             					<label>Password</label>
             					<input type="password" name="password2" placeholder="Password" />
             					<input type="submit" value="login" />
             					</form>
           					</fieldset>
        					</div>
      					</div>
    			</div>
    			<br/>
    			<p>Jika belum memiliki akun silahkan <a href="signup.php">Register</a> </p>
			</div>
		</aside>
		<!-- akhir bagian sidebar website -->

		<!-- bagian konten Blog -->
		<div class="blog">
			<?php
				$cari=mysql_query("SELECT *FROM tutorial order by rand() limit $posisi, $batas");
				while ($tampil=mysql_fetch_array($cari)) {
				?>
			<div class="content">
				<div class="post-info">
					<p></p>
				</div>
				<h1><?php echo $tampil['judul']; ?></h1>
				<hr>
				<p>
					<?= excerpt($tampil['data']); ?>
				</p>				
				<a href="content.php?id=<?php echo $tampil['id_tutorial'] ?>" class="next-content">Selengkapnya >></a>
			</div>
			<?php
		}
		$car=mysql_query("SELECT *FROM tutorial");
		$jmlhdata=mysql_num_rows($car);
		$jmlhalaman= ceil($jmlhdata/$batas);
		echo "<br> Halaman : ";
		for ($i=1;$i<=$jmlhalaman;$i++)
			if ($i != $halaman) {
				echo "<a href=\"index.php?halaman=$i\">$i</a>|";
			}
			else{
				echo "<b>$i</b>";
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