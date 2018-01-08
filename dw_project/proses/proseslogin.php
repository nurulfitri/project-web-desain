<?php

require_once("koneksi.php");
$email=$_POST['email'];
$pass=$_POST['password2'];
$cekuser=mysql_query("SELECT * FROM users WHERE email='$email'");
$jumlah=mysql_num_rows($cekuser);
$hasil=mysql_fetch_array($cekuser);

if ($jumlah==0) {
	echo "User Belum Terdaftar!";
	//header('location:../index.php');

}
else{
	if ($pass!=$hasil['password']) {
		echo "Maaf Password anda Salah!";
		//header('location:../index.php');
	}
	else{
		$SESSION['password2']=$hasil['password'];
		header('location:../tampilan/admin.php');
	}
}

?>