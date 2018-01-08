<!DOCTYPE html>
<html>
<head>
	<title>Latihan Desain</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
</head>
<body>

	<!-- bagian header template -->
	<header>
		<img src="gambar/header1.png">
	</header>
	<!-- akhir bagian header template -->
	
	<div class="wrapper">
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
    <center>
    <h1>Sign up</h1>
    <form action="proses/prosessignup.php" method="POST">
    <input type="text" name="nama" placeholder="Nama" />
    <input type="text" name="umur" placeholder="Umur" />
    <input type="text" name="email" placeholder="E-mail" />
    <input type="password" name="password" placeholder="Password" />
    <input type="password" name="password2" placeholder="Retype password" />
    <input type="text" name="negara" placeholder="Negara" />
    <input type="text" name="kota" placeholder="Kota" />
    <textarea type="text" name="tentang" placeholder="Bio"></textarea><br/>
    <input type="submit" name="signup_submit" value="Sign me up" />
    </form>
    </center>
		
	</div>
	<footer>
		<img src="gambar/footer1.png">
	</footer>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="index.js"></script>
</body>
</html>