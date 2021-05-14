<?php

require_once "config.php";

session_start();
	
	


?>







<!DOCTYPE html> <!---defines this document to be HTML5--->
<html>			<!---root element of an HTML page--->
<head>			<!---contains meta information--->
	<title>Labour dashboard</title>
	<link rel="stylesheet" href="css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
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
} ?>
	<div id="transbox">
	<?php
	
	$l_id=$_SESSION["id"];
	$query = "SELECT * FROM works WHERE work_id NOT IN (SELECT work_id FROM labour_applied_work WHERE lab_id='$l_id')";
	$result=mysqli_query($conn, $query);

			
			
	
	
	while($row = mysqli_fetch_assoc($result))
{
	$w_id=$row['work_id'];
	$wp_id=$row['wp_id'];
	$wt_id=$row['wt_id'];
	
		$query1 = "SELECT * FROM work_provider WHERE wp_id='$wp_id'";
	$result1=mysqli_query($conn, $query1);
	while($row1 = mysqli_fetch_assoc($result1)){
	$query2 = "SELECT * FROM work_type WHERE wt_id='$wt_id'";
	$result2=mysqli_query($conn, $query2);
	while($row2= mysqli_fetch_assoc($result2)){
	
	
		$wp_name=$row1['wp_name'];
		$wt_name=$row2['wt_name'];
		
		$w_name=$row['work_name'];
		
			
			$shift=$row['shift'];
			$req=$row['total_requirement'];
			$vac=$row['total_vacant'];
		echo"<a href='work.php?wid=$w_id'><div class='container'>
		<b>{$w_id}</b><p><span>{$w_name}</span> By {$wp_name} For {$wt_name}</p><p><span>{$shift} Shift work </span>vacancy : {$vac} / {$req}</p>
  </div></a>";
	
}}}
		?>
  
	
  
  
</div>
	</div>



	<?php	include "footer.php"; ?>
</div>
	
</body>
<script src="js\script.js">

</script>
</html>