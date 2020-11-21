<?php
$dbservername = "localhost";
$dbusername= "root";
$dbpassword = "";
$dbname = "f32ee";

 $conn= mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
 if(!$conn){
	die(mysqli_error());
}

if(isset($_POST['Update!']))
{
	$jjreg1 = mysqli_real_escape_string($conn,$_POST['jjreg1']);
	$cals1 = mysqli_real_escape_string($conn,$_POST['cals1']);
	$cals2 = mysqli_real_escape_string($conn,$_POST['cals2']);
	$caps1 = mysqli_real_escape_string($conn,$_POST['caps1']);
	$caps2 = mysqli_real_escape_string($conn,$_POST['caps2']);
		}

 ?>
