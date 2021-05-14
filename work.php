<?php

session_start();
$l_id=$_SESSION["id"];
require_once "config.php";
		$w_id=$_GET['wid'];

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$sql1 = "INSERT INTO `labour_applied_work`(`Lab_id`, `work_id`) VALUES ('$l_id','$w_id')";
							
						mysqli_query($conn,$sql1);
						if (mysqli_query($conn,$sql1))
						{
							$showError = "data not inserted";
						}
						else{
							$showAlert=TRUE;
						}
						
						
	if($showAlert)
			{
				echo ' <div class="alert success" >
						<span class="closbtn">&times;</span>  
						<center><strong>Success!</strong> Applies for the work successfully...!!!</center>
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
<body style="background-image: url('img/bg1.jpg');">
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

	<center><div id="transbox" style="margin:5% 10% 3% 10%;font-size:1.5vw;" >
	
	
<?php
	
	
	
	


$query1 = "SELECT * FROM works WHERE work_id=$w_id";
			$result1=mysqli_query($conn, $query1);
						
while($row = mysqli_fetch_assoc($result1))
{
			$c_id=$row['city_id'];
			$s_id=$row['state_id'];
			$wp_id=$row['wp_id'];
			$wt_id=$row['wt_id'];
			$query2 = "SELECT wp_name FROM work_provider WHERE wp_id ='$wp_id'";
				$result2=mysqli_query($conn, $query2);
	while($row2 = mysqli_fetch_assoc($result2)){
				
				$query3 = "SELECT wt_name FROM work_type WHERE wt_id ='$wt_id'";
				$result3=mysqli_query($conn, $query3);
		while($row3 = mysqli_fetch_assoc($result3)){
				
				$query4 = "SELECT name FROM cities WHERE id ='$c_id'";
				$result4=mysqli_query($conn, $query4);
			while($row4 = mysqli_fetch_assoc($result4)){
				
				$query5 = "SELECT name FROM states WHERE id ='$s_id'	";
				$result5=mysqli_query($conn, $query5);
				while($row5 = mysqli_fetch_assoc($result5)){
				
		
	
	
	
		$w_name=$row['work_name'];
				$wp_name=$row2['wp_name'];
				$wt=$row3['wt_name'];
				$st=$row['sal_type'];
				$sal=$row['salary'];
				$hardness=$row['hardness'];
				$shift=$row['shift'];
				$loc_c=$row4['name'].", ".$row5['name'];
				$req=$row['total_requirement'];
				$vac=$row['total_vacant'];
				$last_date=$row['last_date'];
				$l_d=date_format(new DateTime($last_date),"d F Y");
	echo"<form method='post' id='myForm'>";
	echo"<h2>{$w_name}</h2><br>Contractor name : {$wp_name}<br><br>Type : {$wt}<br><br>Salary : {$sal} / {$st}<br><br>Hardness : {$hardness}<br><br>Shift : {$shift} shift<br><br>workplace : {$loc_c}<br><br>vacancy : {$vac} / {$req}<br><br>Last date : {$l_d}<br><br><br><br>";
	
	echo"<a href='#'onclick='submitForm(this)'style='background-color:#4CAF50;COLOR:WHITE;padding:1%;margin-right:8%;cursor:pointer;font-size:2vw;'>APPLY</button>";
	echo"<a href='dashboard.php'style='font-size:2vw;background-color:white;padding:1%;border:1px solid #4CAF50;'>CANCEL</a>";
	
	echo"</form>";
	
	
}}}}}	?>






	
	</div></center>



		
	<?php	include "footer.php"; ?>
</div>
	
</body>
<script src="js\script.js"></script>
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