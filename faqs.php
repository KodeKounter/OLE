<?php


session_start();
?>
<!DOCTYPE html> <!---defines this document to be HTML5--->
<html>			<!---root element of an HTML page--->
<head>			<!---contains meta information--->
	<title>FAQs</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="UTF-8">		<!---define the character set to be UTF-8--->
	<meta name="viewport" content="width=device-width, initial-scale=1">		<!---name="viewport" makes the website look good on all devices and screen resolutions--->
</head>
<body style="background-image: url('img/faq3.png');background-attachment: fixed;background-repeat: no-repeat;background-size: cover;font-family:alata;">

<div >
	<!DOCTYPE html> <!---defines this document to be HTML5--->
<html>			<!---root element of an HTML page--->
<head>			<!---contains meta information--->
	<title>FAQs</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="UTF-8">		<!---define the character set to be UTF-8--->
	<meta name="viewport" content="width=device-width, initial-scale=1">		<!---name="viewport" makes the website look good on all devices and screen resolutions--->
</head>
<body style="background-image: url('img/faq3.png');">

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
	
	
		<div id="transbox"style="text-align:left; margin:5%;padding:5%;color:#16576a;">
				<h1>FAQs</h1>
				<div class="row">
					<div class="card" style="text-align:left;">
					  <h3>Q-1   How to register as a Labour </h3>
					  <p>you can go through the OLE.com where you find the login page and below the login form there is the option which says "don't have an account? register here" you have to click on it and the registration page will open where you have to choose the type of user that is labour in your case and fill the form and submit it.</p>
					</div>
				  </div>
				  <div class="row">
					<div class="card" style="text-align:left;">
					  <h3>Q-2   Is the labours shown here are valid? </h3>
					  <p>OLE first verify the identity and do the legal procedure to verify the vendors on our site so you can freely trust on them and if any illegal action done by them we surely take an action against the perticular</p>
					</div>
				  </div>
		
	</div><?php	include "footer.php"; ?></div>
</div>	

</body>
</html>