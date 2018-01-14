<?php
	mysql_connect("localhost","root","");
	mysql_select_db("desain_web");

	$kota=$_GET['kota'];

	echo $kota;

	$qry = mysql_query("select *from districts where regency_id='$kota'");

	echo "<option> --Kecamatan-- </option>";

	while ($p = mysql_fetch_array($qry)) {

		echo "<option value=$p[id]>$p[name]</option> \n";
	}

?>