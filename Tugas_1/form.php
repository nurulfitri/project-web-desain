<!DOCTYPE html>
<html>
<head>
	<title>Desain Web Tugas 1</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-3.2.0.min.js"></script>

	<script>
		$(document).ready(function(){
			$("#provinsi").change(function(){
			var provinsi = $("#provinsi").val();
			$.ajax({
				url:"kota.php", 
				data:"provinsi=" + provinsi,
				success:function(data){
					$("#kota").html(data);
				}
			});
		});
				
			$("#kota").change(function(){
			var kota = $("#kota").val();
			$.ajax({
				url:"kecamatan.php", 
				data:"kota=" + kota,
				success:function(data){
					$("#kecamatan").html(data);
				}
					});
				});

			$("#kecamatan").change(function(){
			var kecamatan = $("#kecamatan").val();
			$.ajax({
				url:"dusun.php", 
				data:"kecamatan=" + kecamatan,
				success:function(data){
					$("#dusun").html(data);
				}
					});
				});
		});
	</script>
</head>

<body>
	<div class="header">
		<h1>Tugas Desain Web</h1>
	</div>

	<div class="content">
		<table class="table">
			<td>
			<h3 align="center">Alamat Pribadi</h3>
				<form>
					<label>Provinsi</label>
					<select id="provinsi" name="provinsi">
						<option value=""> --Provinsi-- </option>
						<?php
							mysql_connect("localhost","root","");
							mysql_select_db("desain_web");

							$qry = mysql_query("select *from provinces order by name");
							while ($q = mysql_fetch_array($qry)){
							echo "<option value=$q[id]>$q[name]
							</option>";
						}

						?>	
					</select>

					<label>Kab/Kota</label>
					<select id="kota" name="kota">
						<option value="">--Kota--</option>	
					</select>

					<label>Kecamatan</label>
					<select  id="kecamatan" name="kecamatan">
						<option>--Kecamatan--</option>
					</select>
					
					<label>Dusun/Kampung</label>
					<select id="dusun" name="dusun">
						<option>--Kampung--</option>
					</select>
					
					<label>RT/RW</label>
					<input type="text" name="rt" id="t1" onkeyup="copytext()">
					
					<label>Jalan</label>
					<input type="text" name="jln" id="j1" onkeyup="copytex()">
				</form>
			</td>
		
			<td>
				<form>
				<h3 align="center">Alamat Orangtua</h3>
					<label>Provinsi</label>
					<select id="provinsi" name="provinsi">
						<option value=""> --Provinsi-- </option>
						<?php
							mysql_connect("localhost","root","");
							mysql_select_db("desain_web");

							$qry = mysql_query("select *from provinces order by name");
							while ($q = mysql_fetch_array($qry)){
							echo "<option value=$q[id]>$q[name]
							</option>";
						}

						?>
						
					</select>
					<label>Kab/Kota</label>
					<select id="kota" name="kota">
						<option value="">--Kota--</option>
						
					</select>
					<label>Kecamatan</label>
					<select  id="kecamatan" name="kecamatan">
						<option>--Kecamatan--</option>
					</select>
					<label>Dusun/Kampung</label>
					<select id="dusun" name="dusun">
						<option>--Kampung--</option>
					</select>
					
					<label>RT/RW</label>
					<input type="text" name="rt" id="t2">
					<label>Jalan</label>
					<input type="text" name="jln" id="j2">
				</form>
			</td>	
		</table>	
	</div>
	<script>
		function copytext(){
			document.getElementById('t2').value=
			document.getElementById('t1').value;
		}
		function copytex(){
			document.getElementById('j2').value=
			document.getElementById('j1').value;
		}
	</script>

	<div class="footer">
	<h1>Footer</h1>
		
	</div>
</body>
</html>