<!DOCTYPE html>
<html>
<head>			<!---contains meta information--->
	<title>LOGIN</title>
	<link rel="stylesheet" href="css/main.css">
	
	<link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
	<meta charset="UTF-8">		<!---define the character set to be UTF-8--->
	<meta name="viewport" content="width=device-width, initial-scale=1">		<!---name="viewport" makes the website look good on all devices and screen resolutions--->
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a><?phpecho $_SESSION['name'];?></a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script src="js\script.js"></script>
   
</body>
</html> 
