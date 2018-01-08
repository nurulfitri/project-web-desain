<?php
include_once 'koneksi.php';

$id=$_GET['ID'];

$qry=mysql_query("DELETE FROM draf WHERE id_draf='$id'");
if ($qry) {
	?>
	<script type="text/javascript">
			alert("Data Berhasil Dihapus!!");
			window.location.href="../tampilan/draf.php";
		</script>
<?php
}
?>