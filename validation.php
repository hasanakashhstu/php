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
$nameErr = $emailErr  = "";
$name = $email = "";
$count=1;

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
  if($count<2)
  {
    $Name = mysqli_real_escape_string($conn,$_POST['name']);
  	$Email = mysqli_real_escape_string($conn,$_POST['email']);

    $sql = "INSERT INTO valid_info (name,email )VALUES ('$Name','$Email')";
    $run = mysqli_query($conn,$sql);
    if($run){

      header("refresh:0;url=validation.php");
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

  <input type="submit" name="submit" value="Submit">
</form>



</body>
</html>
