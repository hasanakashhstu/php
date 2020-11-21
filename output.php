<?php
$conn = mysqli_connect('localhost','root','','lets_travel_bangladesh');
if(!$conn){
	die(mysqli_error());
}
mysqli_select_db($conn,"place");
$results = mysqli_query($conn,"SELECT place_name,rating FROM place where id=1");
echo "<table border='3'>
<tr>
<th>Beautiful Places Of Bangladesh </th>
<th>Average Rating(Provided By The Users)</th>
</tr>";
while($row = mysqli_fetch_array($results) ){
	$t=$row['rating'];
	   echo"<tr>";
	   echo "<td>".$row['place_name']."</td>";
	   echo "<td>";
	      for ($x = 1; $x <= $t; $x++) {
    echo "*";
}
	   echo"</td>";
	   echo"</tr>";

}
echo"</table>";
?>
