<?php
	error_reporting(0);
	session_start();
	$db_con = mysqli_connect('localhost','root','','php');

	if(isset($_POST['submit_log']))
	{
		$email = mysqli_real_escape_string($db_con,$_POST['email']);
		$password = mysqli_real_escape_string($db_con,$_POST['password']);
		$query ="select * from admin where email='$email' and password='$password'";
		$run = mysqli_query($db_con,$query);
		$count=mysqli_num_rows($run);

		if ($count>0)
			{
				$_SESSION['email']=$email;
				header("refresh:0; url=login.php");
				$message = $_SESSION['email']." ,You are logged In now...";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		else
			{
				header("refresh:0; url=login.php");
				$message = "Incorrect UserName and Password combination...";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
	}
?>

<!DOCTYPE html>
<html lang="en">

<body>

                <form action="" method="post">

                      <fieldset>
                        <input name="email"  type="text" class="form-control"
                          id="name" placeholder="Email" required="" />
                      </fieldset>


                      <fieldset>
                        <input   name="password" type="text" class="form-control"
                          id="email" placeholder="Password..." required>
                      </fieldset>

                      <fieldset>
                        <button type="submit" target="_blank" name="submit_log" id="form-submit" class="button">
                          Log In
                        </button>
                      </fieldset>

                </form>
            
	</body>
	</html>
