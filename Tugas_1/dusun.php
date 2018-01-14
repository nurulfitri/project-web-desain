<?php
	mysql_connect("localhost","root","");
	mysql_select_db("desain_web");

	$kecamatan=$_GET['kecamatan'];

	echo $kecamatan;

	$qry = mysql_query("select *from villages where district_id='$kecamatan'");

	echo "<option> --Dusun/Kampung-- </option>";

	while ($p = mysql_fetch_array($qry)) {

		echo "<option value=$p[id]>$p[name]</option> \n";
	}

?>