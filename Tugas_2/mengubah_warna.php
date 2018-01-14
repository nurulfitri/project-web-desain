<!DOCTYPE html>
<html>
<head>
	<title>Desain Web Tugas 1</title>

	<script type="text/javascript" src="jquery-3.2.0.min.js"></script>
	<script>
	$(document).ready(function(){
    	$("#merah").click(function(){
        $("p").addClass("merah");
        $("p").removeClass("biru");
        $("p").removeClass("hijau"); 
        $("p").removeClass("kuning");
    	});
    	$("#biru").click(function(){
        $("p").addClass("biru");
        $("p").removeClass("merah");
        $("p").removeClass("hijau");
        $("p").removeClass("kuning");
        
         
    	});

    	$("#hijau").click(function(){
        $("p").addClass("hijau");
        $("p").removeClass("merah");
        $("p").removeClass("biru");
        $("p").removeClass("kuning"); 
    	});

    	$("#kuning").click(function(){
        $("p").addClass("kuning");
        $("p").removeClass("merah");
        $("p").removeClass("biru");
        $("p").removeClass("hijau"); 
    	});
	});
</script>

</head>
<style>
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: navy;
}
.merah{
color : red;
font-size: 20pt;
}
.biru{
 color : blue;
 font-size: 20pt;
}
.hijau{
	color: green;
	font-size: 20pt;
}
.kuning{
	color: yellow;
	font-size: 20pt;
}

</style>
<body>
	<div class="header">
		<h1>Header</h1>
	</div>

		
			<ul>
  				<li><a style="color: red;" id="merah">Merah</a></li>
  				<li><a style="color: blue;" id="biru">Biru</a></li>
  				<li><a style="color: green;" id="hijau">Hijau</a></li>
  				<li><a style="color: yellow;" id="kuning">Kuning</a></li>
			</ul>
		
		

	<div class="content">
		<p><h1>Tugas2 Desain Web</h1></p>
		
			<p> Nama : Nurul Fitria Puspitasari </p>
			<p> Nim  : 5140411019 </p>
			<p> Prodi: Teknik Informatika </p>
			<p> Kls  : A </p>
	</div>
	
	<div class="footer">
	<h1>Footer</h1>
		
	</div>
</body>
</html>