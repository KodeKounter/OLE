<?phpsession_start();
$id=$_SESSION["cm1"];

require_once "config.php";
$query = "SELECT * FROM img WHERE img_id='$id'";
			$result=mysqli_query($conn, $query);
			while($row = mysqli_fetch_array($result))
			{
				$img=$row['img'];
				
			}




?>

<html>
<head>
<link rel="stylesheet" href="css/main.css">
<link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
</head>
<body>


<div class="header">


	<div class="h1">
	<a style="vertical-align:60%;font-size:2vw;cursor:pointer;color:#6f1ba1;padding-left:2%;" onclick="openNav()">&#9776;</a>&nbsp;&nbsp;&nbsp;
		<img src="img/logo.png" width="25%" >	
		
	</div>
	<div class="h2">
		<a href="dashboard.php">Home</a>&nbsp;	
		<a href="notification.php">Notifications</a>&nbsp;
		<a href="index.php">Logout</a>&nbsp;		
	</div>
</div>





<div id="mySidenav" class="sidenav">
  <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
  <center>
 <?php
	echo '<h3 >';echo $_SESSION['name'];
 ?></center>
  <a href="profile.php">My Profile</a>
  <a href="works.php">Your Works</a>
  
  <a href="#"></a>
  <a href="#">Contact</a>
</div>


<script src="js\script.js"></script>

</body>
</html>	