<?php
include_once 'koneksi.php';

$id_tutorial=$_POST['id_tutorial'];
$judul=$_POST['judul'];
$label=$_POST['label'];
$isi=$_POST['data'];
$tgl=$_POST['tanggal'];

if (isset($_POST['save'])) {
	$qry=mysql_query("UPDATE draf SET judul='$judul', label='$label', data='$isi', tanggal=NOW() WHERE id_tutorial='$id_tutorial' ");

	?>
	<script type="text/javascript">alert('Data Berhasil di Rubah!'); window.location.href="../tampilan/draf.php";</script>
	<?php
}
else if (isset($_POST['publish'])) {
	$qry=mysql_query("UPDATE tutorial SET judul='$judul', label='$label', data='$isi', tanggal=NOW() WHERE id_tutorial='$id_tutorial' ");

	?>
	<script type="text/javascript">alert('Data Berhasil di Rubah!'); window.location.href="../tampilan/diterbitkan.php";</script>
	<?php
}
?>