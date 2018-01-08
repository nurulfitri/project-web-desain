<?php
include_once 'koneksi.php';

$id=$_GET['ID'];

$qry=mysql_query("DELETE FROM tutorial WHERE id_tutorial='$id'");
if ($qry) {
	?>
	<script type="text/javascript">
			alert("Data Berhasil Dihapus!!");
			window.location.href="../tampilan/diterbitkan.php";
		</script>
<?php
}
?>