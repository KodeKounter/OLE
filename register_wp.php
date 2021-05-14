<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values

$showAlert = false;  
$showError = false;  

$wp_name = $wp_mobile1 = $wp_mobile2 = $wp_email = $gst = $wp_pwd = $wp_cnfpwd =  "";

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	$wp_name = $_POST["wp_name"];
	$wp_mobile1 = $_POST["wp_mobile1"];
	$wp_mobile2 = $_POST["wp_mobile2"];
	$wp_email = $_POST["wp_email"];
	$gst = $_POST["wp_GST_NO"];
	$wp_pwd = $_POST["pass"];
	$wp_cnfpwd = $_POST["cnfpass"];

	if(strlen($wp_mobile1)==10 && strlen($gst)==15 && (strlen($wp_mobile2)==10 ||strlen($wp_mobile2)==0) && strlen($wp_pwd)>8)
	{
				
			if(!empty($wp_mobile1))			//if(empty(trim($_POST["username"])))
			{
				$sql = "Select * from work_provider where wp_mobile1='$wp_mobile1'"; 
				$result = mysqli_query($conn, $sql); 
				$num1 = mysqli_num_rows($result);
			}
			
			if($num1 == 0 && $wp_pwd == $wp_cnfpwd) 
			{ 
					//$hash = password_hash($cust_pwd, PASSWORD_DEFAULT); 
					
					$sql1 = "INSERT INTO `work_provider`(`wp_name`, `wp_mobile1`, `wp_mobile2`, `wp_email`, `wp_GST_NO`, `wp_pwd`, `date`) VALUES ('$wp_name',	'$wp_mobile1',	'$wp_mobile2',	'$wp_email', '$gst', '$wp_pwd', current_timestamp())";
							
						mysqli_query($conn,$sql1);
						if (mysqli_query($conn,$sql1))
						{
							$showError = "data not inserted";
						}
						else{
							$showAlert=TRUE;
						}
			}
			else 
			{
				if($num1!=0){
				$showError = "account already exists";}
				if($wp_pwd != $wp_cnfpwd){
				$showError = "Passwords do not match";}
			}
	}
	else{
		
		
		if(strlen($wp_mobile1)!=10 ||  (strlen($wp_mobile2)!=10 && strlen($wp_mobile2)!=0))
		{
			$showError = "please enter valid mobile number";
		}
		elseif(strlen($gst)!=15)
		{
			$showError = "please enter valid GST number";
		}
		elseif(strlen($wp_pwd)<=8)
		{
			$showError = "password must be greater than 8 letters";
		}
	}
		   
			if($showAlert)
			{
				echo ' <div class="alert success" >
						<span class="closebtn">&times;</span>  
						<strong>Success!</strong> Your account is successfully created and you can login.
					   </div> ';
					   
			}
			if($showError){
					echo '<div class="alert">
			  <span class="closebtn">&times;</span>  
			  <strong>Failed!</strong> '.$showError.'
			</div> ';
			}

}
?>










<!DOCTYPE html> <!---defines this document to be HTML5--->
<html>			<!---root element of an HTML page--->
<head>			<!---contains meta information--->
	<title>REGISTER</title>
	
	
	<link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
	<meta charset="UTF-8">		<!---define the character set to be UTF-8--->
	<meta name="viewport" content="width=device-width, initial-scale=1">		<!---name="viewport" makes the website look good on all devices and screen resolutions--->
</head>
<body style="background-image: url('img/bg1.jpg');background-attachment: fixed;background-position: center top;background-repeat: no-repeat;background-size: cover;font-family:alata;">


<div>
	<?php	include "header.php"; ?>
	<div style="text-align:center;padding-top:8%;margin-top:0%;">
		<div style="background-color: rgba(255,255,255,50%); margin-left:10%;margin-right:10%;padding-left:1%;margin-bottom:5%;padding:5%;">
		
		
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
			<h2 style="text-align:center;">Register as Work Provider</h2><br>
			<div><label>Name<small style="color:red;">*</small></label>&nbsp;&nbsp;&nbsp;
			<input type="text" name="wp_name" placeholder="enter your Name here" style="width:35%;"required> 
			</div><br>
			<div><label>Mobile no.<small style="color:red;">*</small></label>&nbsp;&nbsp;&nbsp;
			<input type="text" name="wp_mobile1" placeholder="enter your Mobile No. here" style="width:35%;"required> 
			</div><br>
			<div><label>Mobile no.</label>&nbsp;&nbsp;&nbsp;
			<input type="text" name="wp_mobile2" placeholder="enter Alternet Mobile No. here" style="width:35%;"> 
			</div><br>
			<div><label>Email Id<small style="color:red;">*</small></label>&nbsp;&nbsp;&nbsp;
			<input type="email" name="wp_email" placeholder="enter Email id here" style="width:35%;"required> </div><br>
			<div><label>GST no.<small style="color:red;">*</small></label>&nbsp;&nbsp;&nbsp;
			<input type="text" name="wp_GST_NO" placeholder="enter your GST number" style="width:35%;"required> </div><br>
			
			<div><label>Password<small style="color:red;">*</small></label>&nbsp;&nbsp;&nbsp;
			<input type="password" name="pass" placeholder="enter correct password" style="width:35%;" required><br> 
			</div><br>
			<div><label>Confirm Password<small style="color:red;">*</small></label>&nbsp;&nbsp;&nbsp;
			<input type="password" name="cnfpass" placeholder="enter password again" style="width:35%;"required><br> 
			</div>
			<br>
			<center><input type="submit" value="Register" style="color:white;background-color:#16576a;font-family:alata;"><center>
			<br>
			<div style="font-size:90%;"><a href="register.php">register for labour.</a><br>
			<br>Already have an account?<a href="login.php">Login Here</a>
			<br>By clicking “REGISTER”, you agree to our <a href="tnc.php">Terms of service</a> and <a href="p_policy.php">privacy policy</a>.
			
			</div>
				
			</form>
			

		</div>
	</div>
	
</div><?php	include "footer.php"; ?>
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