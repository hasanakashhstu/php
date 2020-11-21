<html>
<body>

<form action="">
  <label for="cars">Choose a car:</label>
  <select id="cars" name="cars">

		<?php
		$conn= mysqli_connect('localhost','root','','cheakbox');
		if(!$conn){
			die(mysqli_error());
		}
		mysqli_select_db($conn,"value");
		$results = mysqli_query($conn,"SELECT name FROM value");

		while($row = mysqli_fetch_array($results) ){
echo' <option value=" '.$row['name'].'"> '.$row['name'].'</option>';
		}
		?>



  </select>
  <input type="submit">
</form>
</body>
</html>
