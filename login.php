<?php
session_start();
require_once "config.php";
$showError = false;
$type=null;

// Turn off all error reporting
error_reporting(0);
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	$type = $_POST["type"];
	$lmobile1 = $_POST["lmobile1"];
	$pwd = $_POST["pwd"];
	
	if($type=="labour")
	{
		$sql = "Select * from labours where Lab_mobile1='$lmobile1'";
		$result = mysqli_query($conn, $sql); 
		$num1 = mysqli_num_rows($result);
		if($num1 == 0)
		{
			$showError = "Your account is not registered";
		}
		else
		{
			
			$query = "SELECT * FROM labours WHERE Lab_mobile1='$lmobile1'";
			$result=mysqli_query($conn, $query);
			while($row = mysqli_fetch_array($result))
			{
				if($pwd == $row['Lab_pwd'])
				{
					
					$_SESSION["lmobile1"] = "$lmobile1";
					$_SESSION["tmp"]=TRUE;
					$_SESSION["name"]=$row['Lab_name'];
					$_SESSION["id"]=$row['Lab_id'];
					header("location: dashboard.php");
					
				}
				else
				{
					$showError = "Your password is incorrect";
				} 
			}
		}
	}
	elseif ($type=="wp")
	{
		$sql = "Select * from work_provider where wp_mobile1='$lmobile1'";
		$result = mysqli_query($conn, $sql); 
		$num1 = mysqli_num_rows($result);
		if($num1 == 0)
		{
			$showError = "Your account is not registered";
		}
		else
		{
			
			$query = "SELECT * FROM work_provider WHERE wp_mobile1='$lmobile1'";
			$result=mysqli_query($conn, $query);
			$row = mysqli_fetch_assoc($result);
		
			if($pwd == $row['wp_pwd'])
			{
				
				$_SESSION["wp_id"] = $row['wp_id'];
				$_SESSION["tmp"]=TRUE;
				header("location: wp_dash.php");
				
			}
			else
			{
				$showError = "Your password is incorrect";
			} 
		}
	
	}
	elseif($type=="")
	{
		$showError= "please choose the type";
	}
}
else{
	 session_destroy();
	
}

if($showError)
	{
			echo '<div class="alert">
	  <span class="closbtn">&times;</span>  
	  <center><strong>Failed!</strong> '.$showError.'</center>
	</div> ';
	}
?>

<!DOCTYPE html> <!---defines this document to be HTML5--->
<html>			<!---root element of an HTML page--->
<head>			<!---contains meta information--->
	<title>LOGIN</title>
	
	<link rel="stylesheet" href="css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
	<meta charset="UTF-8">		<!---define the character set to be UTF-8--->
	<meta name="viewport" content="width=device-width, initial-scale=1">		<!---name="viewport" makes the website look good on all devices and screen resolutions--->

</head>

<body style="background-image: url('img/bg1.jpg');background-attachment: fixed;background-position: center top;background-repeat: no-repeat;background-size: cover;font-family:alata;">
<div>
	<?php	include "header.php"; ?>
	<div style="text-align:center;padding-top:8%;">
		<div id="transbox" style="margin-left:20%;margin-right:20%;margin-bottom:5%;padding:5%;">
		
		
		
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
			<h2 style="text-align:center;">LOG IN</h2><br>
			<div><label>User type:&nbsp;&nbsp;&nbsp;</label>
			<input type="radio" name="type"value="labour">Labour&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="type" type="radio" value="wp">Work Provider
			</div><br><br>
			<div><label>Mobile no.</label>&nbsp;&nbsp;&nbsp;
			<input type="text" name="lmobile1" placeholder="enter your registered mobile no." style="width:35%;" required> 
			</div><br>
			<div><label>Password</label>&nbsp;&nbsp;&nbsp;
			<input type="password" name="pwd" placeholder="enter correct password" style="width:35%;" required> 
			</div>
			<br>
			<center><button type="submit" value="submit" style="color:white;background-color:#880094;font-family:alata;">LOG IN</button><center>
			<br>
			<div style="font-size:70%;"><a href="register.php">Don't have an account? Register here </a>
			</div>
				
			</form>
			

		</div>
	</div>
	<?php	include "footer.php";?>
</div>
	
</body>
<script>
var close = document.getElementsByClassName("closbtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 1);
  }
}
</script>
</html>
