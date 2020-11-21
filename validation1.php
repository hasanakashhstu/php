<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
 include("dbconn.php");

// define variables and set to empty values
$nameErr = $emailErr = $passErr  = "";
$name = $email = $password= "";
$count=1;
$password_length = 8;

 	if(isset($_POST['submit'])){
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $count++;
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
        $count++;
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
      $count++;
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
        $count++;
    }
  }

  if (empty($_POST["password"])) {
    $passErr = "Password is required";
    $count++;
  }
  else {
   $password = test_input($_POST["password"]);
   // check if password contain at least one number and one uppercase letter
  if ( strlen($password) < $password_length ){
       $passErr = "At least 8 letters contain with one number  and one Uppercase letter";
       $count++;
   }
   else if (  !preg_match("#[0-9]+#", $password) ){
        $passErr = "At least 8 letters contain with one number  and one Uppercase letter";
        $count++;
    }
    else if (  !preg_match("#[A-Z]+#", $password) ){
         $passErr = "At least 8 letters contain with one number  and one Uppercase letter";
         $count++;
     }
 }



  if($count<2)
  {
    $Name = mysqli_real_escape_string($conn,$_POST['name']);
  	$Email = mysqli_real_escape_string($conn,$_POST['email']);
    	$Password= mysqli_real_escape_string($conn,$_POST['password']);

    $sql = "INSERT INTO valid_info_1 (name,email,password )VALUES ('$Name','$Email','$Password')";
    $run = mysqli_query($conn,$sql);
    if($run){

      header("refresh:0;url=validation1.php");
    }
}
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<p><span class="error">* required field</span></p>
<form method="post" action="">
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Password: <input type="text" name="password">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">
</form>



</body>
</html>
