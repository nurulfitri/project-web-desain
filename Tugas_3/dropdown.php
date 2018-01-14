<!DOCTYPE html>
<html>
<head>
	<title>Desain Web Tugas 1</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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

.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

</style>
<body>
	<div class="header">
		<h1>Header</h1>
	</div>
    
    <div class="dropdown">
        <button class="dropbtn">Dropdown</button>
            <div class="dropdown-content">
                <a href="#">Artikel 1</a>
                <a href="#">Artikel 2</a>
                <a href="#">Artikel 3</a>
            </div>
    </div>
		
	<div class="content">
		<h1>Tugas 3 Latihan Dropdown dan Mega Menu</h1>
	</div>
	
	<div class="footer">
	<h1>Footer</h1>
		
	</div>
</body>
</html>