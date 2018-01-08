<?php
require_once("koneksi.php");
$nama=$_POST['nama'];
$umur=$_POST['umur'];
$email=$_POST['email'];
$pass=$_POST['password2'];
$negara=$_POST['negara'];
$kota=$_POST['kota'];
$tentang=$_POST['tentang'];
$cekuser=mysql_query("SELECT * FROM users WHERE email='$email'");

/*echo "cek=".$cekuser;
echo "cek=".$nama;
echo "cek=".$email;
echo "cek=".$pass;*/

if (mysql_num_rows($cekuser)>0) {
	echo "Username Sudah Terdaftar!";
	header('location:../signup.php');
}
else{
	$simpan=mysql_query("INSERT INTO users (nama,umur,email,password,negara,kota,tentang) VALUES ('$nama','$umur','$email','$pass','$negara','$kota','$tentang')");
	echo "cek=".$simpan;
	if ($simpan) {
		echo "Pendaftaran Berhasil!";
		header('location:../index.php');
	}
	else{
		echo "Proses Gagal!!";
	}
}
?>
