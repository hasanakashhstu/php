<html>
<body>
<?php
$conn = mysqli_connect('localhost','root','','cheakbox');
if(!$conn){
	die(mysqli_error());
}
mysqli_select_db($conn,"value");
$results = mysqli_query($conn,"SELECT name FROM value");

while($row = mysqli_fetch_array($results) ){

echo'<input type="checkbox"  name="cheakbox" value="'.$row['name'].'">';
echo'<label for="cheakbox"> I am from '.$row['name'].' </label><br>';
}
?>

</body>
</html>
