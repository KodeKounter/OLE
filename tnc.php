<?php


session_start();
if(!isset($_SESSION["tmp"]))
{
	include "header_out.php";
}
else
{
include "header_in.php";
}
?>

<!DOCTYPE html> <!---defines this document to be HTML5--->
<html>			<!---root element of an HTML page--->
<head>			<!---contains meta information--->
	<title>Terms & Conditions</title>
	<link rel="stylesheet" href="css/main.css">
	<meta charset="UTF-8">		<!---define the character set to be UTF-8--->
	<meta name="viewport" content="width=device-width, initial-scale=1">		<!---name="viewport" makes the website look good on all devices and screen resolutions--->
</head>
<body style="background-image: url('img/contact1.jpg');background-attachment: fixed;background-position: center top;background-repeat: no-repeat;background-size: cover;font-family:alata;">
	<div id="main">
	<?php	include "header.php"; ?>
		<div style="padding-top:5%;text-align:center;">
		<h1>Terms & Conditions</h1> 
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>				
		</div>
	<?php	include "footer.php"; ?>
	</div>
	
</body>
</html>