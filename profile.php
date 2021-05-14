<?php
require_once "config.php";

session_start();

?>

<!DOCTYPE html>
<html>
<head>			<!---contains meta information--->
	<title>Profile</title>
	<link rel="stylesheet" href="css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
	<meta charset="UTF-8">		<!---define the character set to be UTF-8--->
	<meta name="viewport" content="width=device-width, initial-scale=1">		<!---name="viewport" makes the website look good on all devices and screen resolutions--->
</head>

<body style="background-image: url('img/1bg.jpg');">
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
<div id="transbox"style=" text-align:center;margin:5% 10% 3% 10%;padding-bottom:3%;">

	<div style=" position: relative;">
        <img src="img/bg7.jpg"width="75%">
        <h1 style="position: absolute;top: 45%;left: 37%;color:#734d26;">Welcome <?php $name=$_SESSION["name"];echo$name;?></h1>
          <hr style="width:100%; text-align:center;">
	</div>
	<div>
	<?php
	
	$lid=$_SESSION["id"];
	
	


$query1 = "SELECT * FROM labours WHERE Lab_id='$lid'";
			$result1=mysqli_query($conn, $query1);
						
while($row = mysqli_fetch_assoc($result1))
{
			$lname=$row['Lab_name'];
			$lm1=$row['Lab_mobile1'];
			$lm2=$row['Lab_mobile2'];
			$gen=$row['Lab_gender'];
			$dob=$row['Lab_DOB'];
			$aadhar=$row['Lab_aadhar'];
			$sos=$row['Lab_SOS'];
			
			$query2 = "SELECT * FROM labour_applied_work WHERE Lab_id ='$lid'";
				$result2=mysqli_query($conn, $query2);
				$num2 = mysqli_num_rows($result2);
				
	while($row2 = mysqli_fetch_assoc($result2)){
				
				$query3 = "SELECT * FROM labour_saved_work WHERE Lab_id ='$lid'";
				$result3=mysqli_query($conn, $query3);
				$num3 = mysqli_num_rows($result3);
				
		

	echo"<h2>{$lname}</h2><br>1st Mobile no. : {$lm1}<br><br>2nd Mobile no. : {$lm2}<br><br>Gender : {$gen}<br><br>DOB : {$dob}<br><br>Aadhar Card o. : {$aadhar} <br><br>SOS no. : {$sos}<br><br>Total Applied work : {$num2} <br><br>Total Saved work : {$num3}<br><br><br><br>";
	
	
	echo"<a href='dashboard.php'style='font-size:1vw;background-color:white;padding:1%;border:1px solid #4CAF50;'>OK</a>";
	
	echo"</form>";
	
	
}}	?>


</div>


</div>


   <?php	include "footer.php"; ?>
   <script src="js\script.js"></script>
</body>
</html> 
