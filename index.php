<?php
session_start();
session_destroy();
?>
<!DOCTYPE html> <!---defines this document to be HTML5--->
<html>			<!---root element of an HTML page--->
<head>			<!---contains meta information--->
	<title>OLE</title>
	<link rel="stylesheet" href="css/main.css">
	
	<link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
	<meta charset="UTF-8">		<!---define the character set to be UTF-8--->
	<meta name="viewport" content="width=device-width, initial-scale=1">		<!---name="viewport" makes the website look good on all devices and screen resolutions--->
</head>
<body style="background-image: url('img/bg1.jpg');background-attachment: fixed;background-position: center top;background-repeat: no-repeat;background-size: cover;font-family:alata;">
<div>
	<?php	include "header.php"; ?>
	<div style="text-align:center;padding-top:8%;">
		<div style="background-color: rgba(255,255,255,50%); margin-left:20%;margin-right:20%;margin-bottom:5%;padding:5%;">
		<h1>WELCOME</h1><br><hr><BR>
		<div class="row"><a href="register.php">
  <div class="column">
    <div class="card">
      <h3>REGISTER</h3>
    </div>
  </div></a>
  
	
<a href="login.php">
  <div class="column">
    <div class="card">
      <h3>LOGIN</h3>
    </div>
  </div></a>
 
</div><BR><HR>
		
			
		<H2>Labour's Emplyment</h2>
<H2>Country's Development</h2>		
				
		
			

		</div>
	</div>
	<?php	include "footer.php"; ?>
</div>
	
</body>
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>
</html>