<?php
	mysql_connect("localhost","root","");
	mysql_select_db("desain_web");

	$provinsi=$_GET['provinsi'];
	$qry = mysql_query("select *from regencies where province_id='$provinsi'");

	echo "<option> --Kota-- </option>";

	while ($p = mysql_fetch_array($qry)) {

		echo "<option value=$p[id]>$p[name]</option> \n";
	}

?>