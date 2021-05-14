<?php


session_start();?>

<!DOCTYPE html> <!---defines this document to be HTML5--->
<html>			<!---root element of an HTML page--->
<head>			<!---contains meta information--->
	<title>Contact Us</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
	<meta charset="UTF-8">		<!---define the character set to be UTF-8--->
	<meta name="viewport" content="width=device-width, initial-scale=1">		<!---name="viewport" makes the website look good on all devices and screen resolutions--->
</head>
<body  style="background-image: url('img/contact1.jpg');">
<div id="main">
	<?php
if(!isset($_SESSION["tmp"]))
{
	include "header_out.php";
}
else
{
include "header_in.php";
}
?>
	
		<div id="transbox"style=" text-align:center;margin-left:10%;margin-right:10%;margin-bottom:3%;padding-bottom:3%;">
			<h2>Contact Us</h2>
			<hr style="width:25%; text-align:center;">

			<div class="content">
				<div class="c1">
					<span class="fa fa-home"style="font-size:5vw;"></span>
					<h2>Visit Us</h2>
					<p>Head Office: SHOP no. 19A, OLE Co., Himalaya Mall, Drive-In-Road, Thaltej, Ahmedabad-380006.</p>
				</div>
				<div class="c2">
					<span class="fa fa-phone"style="font-size:5vw;"></span>
					<h2>Call Us</h2>
					<span class="fa fa-whatsapp"style="color:#00cc00;font-size:2vw;"></span>&nbsp;&nbsp;+91 9790896520<br>		
					<span class="fa fa-phone"style="color:#00cc00;font-size:2vw;"></span>&nbsp;&nbsp;+91 8756329904				
				</div>
				<div class="c3">
					<span class="fa fa-envelope"style="font-size:5vw;"></span>
					<h2>Mail Us</h2>
					<span class="fa fa-envelope-o"style="color:red;font-size:2vw;"></span>&nbsp;&nbsp;Customer Care<br>		
					&nbsp;&nbsp;customer.care@ole.co.in			
				</div>
				<br><br><br>
			</div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.3727143430287!2d72.52884121439955!3d23.046793384940774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8456837b2cab%3A0x77611cc3fa7f8cd6!2sHimalaya%20mall!5e0!3m2!1sen!2sin!4v1616579681401!5m2!1sen!2sin" width="100%" height="450" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				  
		</div>
	
	<?php	include "footer.php"; ?>
</div>
	<script src="js\script.js">
</body>
</html>