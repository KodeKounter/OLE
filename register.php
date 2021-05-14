<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values

$showAlert = false;  
$showError = false;  

$Lab_name = $Lab_mobile1 = $Lab_mobile2 = $gen = $dob = $aadhar = $sos = $Lab_pwd = $Lab_cnfpwd = ""				;

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	$Lab_name = $_POST["lname"];
	$Lab_mobile1 = $_POST["lmobile1"];
	$Lab_mobile2 = $_POST["lmobile2"];
	$gen = $_POST["gen"];
	$dob = $_POST["dob"];
	$aadhar = $_POST["aadhar"];
	$sos = $_POST["sos"];
	$Lab_pwd = $_POST["pass"];
	$Lab_cnfpwd = $_POST["cnfpass"];

	if(strlen($Lab_mobile1)==10 && strlen($aadhar)==12 && (strlen($Lab_mobile2)==10 ||strlen($Lab_mobile2)==0) && strlen($sos)==10 && strlen($Lab_pwd)>8)
	{
				
			if(!empty($Lab_mobile1))			//if(empty(trim($_POST["username"])))
			{
				$sql = "Select * from labours where Lab_mobile1='$Lab_mobile1'"; 
				$result = mysqli_query($conn, $sql); 
				$num1 = mysqli_num_rows($result);
			}
			
			if($num1 == 0 && $Lab_pwd == $Lab_cnfpwd) 
			{ 
					//$hash = password_hash($cust_pwd, PASSWORD_DEFAULT); 
					
					$sql1 = "INSERT INTO `labours`(`Lab_name`, `Lab_mobile1`, `Lab_mobile2`, `Lab_gender`, `Lab_DOB`, `Lab_aadhar`, `Lab_SOS`, `Lab_pwd`, `Lab_date`) VALUES ('$Lab_name',	'$Lab_mobile1',	'$Lab_mobile2',	'$gen',	'$dob',	'$aadhar',	'$sos',	'$Lab_pwd', current_timestamp())";
							
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
				if($Lab_pwd != $Lab_cnfpwd){
				$showError = "Passwords do not match";}
			}
	}
	else{
		
		
		if(strlen($Lab_mobile1)!=10 || strlen($sos)!=10 || (strlen($Lab_mobile2)!=10 && strlen($Lab_mobile2)!=0))
		{
			$showError = "please enter valid mobile number";
		}
		elseif(strlen($aadhar)!=12)
		{
			$showError = "please enter valid aadhar card number";
		}
		elseif(strlen($Lab_pwd)<=8)
		{
			$showError = "password must be greater than 8 letters";
		}
	}
		   
			if($showAlert)
			{
				echo ' <div class="alert success" >
						<span class="closbtn">&times;</span>  
						<center><strong>Success!</strong> Your account is successfully created and you can login.</center>
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
			<h2 style="text-align:center;">Labour Registration</h2><br>
			<div><label>Name<small style="color:red;">*</small></label>&nbsp;&nbsp;&nbsp;
			<input type="text" name="lname" placeholder="enter your Name here" style="width:35%;"required> 
			</div><br>
			<div><label>Mobile no.<small style="color:red;">*</small></label>&nbsp;&nbsp;&nbsp;
			<input type="text" name="lmobile1" placeholder="enter your Mobile No. here" style="width:35%;"required> 
			</div><br>
			<div><label>Mobile no.</label>&nbsp;&nbsp;&nbsp;
			<input type="text" name="lmobile2" placeholder="enter Alternet Mobile No. here" style="width:35%;"> 
			</div><br>
			<div><label>Gender<small style="color:red;">*</small>&nbsp;&nbsp;&nbsp;</label>
			<input type="radio" name="gen"value="male" required>Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="gen" type="radio" value="Female">Female&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="gen" type="radio" value="Other">Other<br>
			<br><div><label>Date Of Birth<small style="color:red;">*</small></label>&nbsp;&nbsp;&nbsp;
			<input type="date" name="dob" placeholder="enter date of birth here" style="width:35%;"required> </div><br>
			<div><label>Aadhar Card no.<small style="color:red;">*</small></label>&nbsp;&nbsp;&nbsp;
			<input type="text" name="aadhar" placeholder="enter aadhar card number" style="width:35%;"required> </div><br>
			<div><label>SOS no.<small style="color:red;">*</small></label>&nbsp;&nbsp;&nbsp;
			<input type="text" name="sos" placeholder="enter emergency number" style="width:35%;"required> </div><br>
			<div><label>Password<small style="color:red;">*</small></label>&nbsp;&nbsp;&nbsp;
			<input type="password" name="pass" placeholder="enter correct password" style="width:35%;" required><br> 
			</div><br>
			<div><label>Confirm Password<small style="color:red;">*</small></label>&nbsp;&nbsp;&nbsp;
			<input type="password" name="cnfpass" placeholder="enter password again" style="width:35%;"required><br> 
			</div>
			<br>
			<center><input type="submit" value="Register" style="color:white;background-color:#16576a;font-family:alata;"><center>
			<br>
			<div style="font-size:90%;"><a href="register_wp.php">become a work  provider</a><br>
			<br>Already have an account?<a href="login.php">Login Here</a>
			<br>By clicking “REGISTER”, you agree to our <a href="tnc.php">Terms of service</a> and <a href="p_policy.php">privacy policy</a>.
			
			</div>
				
			</form>
			

		</div>
	</div>
	
</div><?php	include "footer.php"; ?>
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