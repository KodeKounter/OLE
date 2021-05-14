<?php

require_once "config.php";
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
	<title>About Us</title>
	<link rel="stylesheet" href="css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
	<meta charset="UTF-8">		<!---define the character set to be UTF-8--->
	<meta name="viewport" content="width=device-width, initial-scale=1">		<!---name="viewport" makes the website look good on all devices and screen resolutions--->
</head>
<body style="background-image: url('img/1bg.jpg');background-attachment: fixed;background-position: center top;background-repeat: no-repeat;background-size: cover;font-family:alata;">
<div>
	
	<div style="padding-top:8%;margin-top:0%;text-align:center;">
		<div style="background-color: rgba(255,255,255,50%); margin-left:20%;margin-right:20%;margin-bottom:3%;padding-bottom:3%;">
			<h2>About Us</h2>
			<hr style="width:25%; text-align:center;">
			<p>Welcome to Online Labours Employment, It is on employment of labours that provides a easy way to get work time to time and income of small workers remains continue by using this web app.</p>
			</p>

			<div class="content">
				<div class="c1">
					<h2>Our Vision</h2>
					<p>To provide Labours various work opportunities so they easily get their vages with our initiative </p>
				</div>
				<div class="c2">
					<h2>Our History</h2>
					<p>We started our operations from Ahmedabad in 2021 . Today we have over 00000 labours, over 0000 contractors and working sites with 00,00,000 work done in across top 5 cities</p>					
				</div>
				<div class="c3">
					<h2 >Our Values</h2>
					<p>We believe in our processes and in our people who lead them. We enjoy the power of empowerment and delegation.</p>					
				</div>
			</div>
		</div>
	</div>
	<?php	include "footer.php"; ?>
</div>
	
</body>
</html>