<?php
include_once 'koneksi.php';
$label=$_POST['label'];
$judul=$_POST['judul'];
$tgl=date("y-m-d");
$isi=$_POST['data'];


if (isset($_POST['save'])) {
	$qry=mysql_query("INSERT INTO draf VALUES ('','$label','$judul','$tgl','$isi')");

	?>
	<script type="text/javascript">alert('Data Berhasil Disimpan!'); window.location.href="../tampilan/draf.php";</script>
	<?php
}
else if (isset($_POST['publish'])) {
	$qry=mysql_query("INSERT INTO tutorial VALUES ('','$judul','$label','$tgl','$isi')");
	?>
	<script type="text/javascript">alert('Data Berhasil di Publish'); window.location.href="../tampilan/diterbitkan.php";</script>
	<?php
}

?>