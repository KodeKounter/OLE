<?php
session_start();


require_once "config.php";
$showAlert = false;  
$showError = false;  

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$type = $_POST["type"];
	$feed_fname = $_POST["fname"];
	$feed_lname = $_POST["lname"];
	$feedback = $_POST["feedback"];
	
	$sql1 = "INSERT INTO `feedform` (`feed_type`, `feed_fname`, `feed_lname`,  `feedback`, `date`) VALUES ('$type', '$feed_fname', '$feed_lname',  '$feedback', current_timestamp());";
					
				mysqli_query($conn,$sql1);
				if (mysqli_query($conn,$sql1))
				{
					
					$showAlert=TRUE;
				}
				else{
					$showError = "data not inserted";
				}
				
				
					if($showAlert)
	{
		echo ' <div class="alert success" >
				<span class="closbtn">&times;</span> 				
				<center><strong>Success!</strong> thanks for your valuable feedback.</center>
			   </div> ';
			   
	}
	if($showError){
			echo '<div class="alert">
	  <span class="closbtn">&times;</span>  
	  <center><strong>Failed!</strong> '.$showError.'</center>
	</div> ';
	}
}


?>





<!DOCTYPE html> <!---defines this document to be HTML5--->
<html>			<!---root element of an HTML page--->
<head>			<!---contains meta information--->
	<title>FEEDBACK</title>
	<link rel="stylesheet" href="css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="UTF-8">		<!---define the character set to be UTF-8--->
	<meta name="viewport" content="width=device-width, initial-scale=1">		<!---name="viewport" makes the website look good on all devices and screen resolutions--->
</head>
<body style="background-image: url('img/feedback1.jpg');">
<div id="main">
<?php	if(!isset($_SESSION["tmp"]))
{
	include "header_out.php";
}
else
{
include "header_in.php";
}
 ?>

		<div id="transbox"style="text-align:left;margin-left:25%;margin-right:25%;padding:5%;color:#16576a;">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
			<h2 style="text-align:center;">Quick Feedback</h2>
			<hr style="width:25%; text-align:left;">
			<center>We would love to hear your thoughts, suggestions, concerns or problems with anything so we can improve!</center>
			<br><br><div><label>Feedback Type</label><br>
			<input type="radio" name="type"value="Comments">Comments&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="type" type="radio" value="suggetion">Suggetions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="type" type="radio" value="questions">Questions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="type" type="radio" value="Complaints">Complaints
			</div><br>
			<div><label>Name</label><br>
			<input type="text" name="fname" placeholder="First Name" required> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lname" placeholder="Last Name" required>
			</div>
			<br>
			<div><label>Give your feedback</label><br>
			<textarea name="feedback" placeholder="write something here..." rows="5" cols="50" required></textarea>
			</div><br>
			<center><button type="submit" style="color:white;background-color:#880094;" >submit</button><center>
			
				
			</form>
		
	</div>
	<?php	include "footer.php"; ?>
</div>
	
</body>
<script>
var close = document.getElementsByClassName("closbtn");
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