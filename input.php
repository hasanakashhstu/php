  <?php
   include("dbconn.php");


   	if(isset($_POST['form-submit']))
  {
  	$name = mysqli_real_escape_string($conn,$_POST['name']);
  	$email = mysqli_real_escape_string($conn,$_POST['email']);
  	$password = mysqli_real_escape_string($conn,$_POST['password']);
    	$gender = mysqli_real_escape_string($conn,$_POST['gender']);
  	$date = mysqli_real_escape_string($conn,$_POST['date']);
  	$message = mysqli_real_escape_string($conn,$_POST['message']);



  		$sql = "INSERT INTO user_info (name,email,password,gender,dob,message) VALUES ('$name','$email','$password','$gender','$date','$message')";
  		$run = mysqli_query($conn,$sql);
  		if($run){

  			header("refresh:0;url=input.php");
  		}


  }

   ?>
  <!DOCTYPE html>
  <html lang="en">

  <body>

                  <form id="" action="" method="post">

                        <fieldset>
                          <input name="name" type="text" class="form-control"
                            id="name" placeholder="Your Name..." value="akash" />

                        </fieldset>

                        <fieldset>
                          <input  name="email" type="text" class="form-control"
                            id="email" placeholder="Your Email..." required=""  />
                        </fieldset>

                        <fieldset>
                          <input   name="password" type="text" class="form-control"
                            id="email" placeholder="Password..." required>
                        </fieldset>

                            <fieldset>
                        Gender:
                        <input type="checkbox" name="gender" value="f">Female
                        <input type="checkbox" name="gender" value="m">Male
                        <input type="checkbox" name="gender" value="o">Other
                        </fieldset>

                        <fieldset>
                          <input   name="date" type="date" class="form-control" required placeholder="Date Of Birth" />
                        </fieldset>

                          <fieldset>
                          <textarea  name="message" rows="6" class="form-control"
                            id="message" placeholder="Message..."  ></textarea>
                        </fieldset>


                        <fieldset>
                          <button type="submit" name="form-submit" class="button">
                            Send Message
                          </button>
                        </fieldset>

                  </form>


  	</body>
  	</html>
