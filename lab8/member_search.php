<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="utf-8" /> 
  <meta name="description" content="Web application development" /> 
  <meta name="keywords" content="PHP" /> 
  <meta name="author"   content="Your Name" /> 
  <title>TITLE</title> 
</head> 
<form action = "member_search.php" method = "post"> 
<p>type in member last name: <input type="text" name="lastname">  </p>
<input type="submit" name="submit" value="find">
<input type="reset" value="reset form" name="reset">
<a href='vip_member.php'>return to main page</a><br />
</form> 
</html> 
<?php
$conn=mysqli_connect("feenix-mariadb.swin.edu.au","s103582323","010302","s103582323_db");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
{
$lastname = $_POST["lastname"];
$result = mysqli_query($conn,"SELECT member_id,firstname,lastname,email FROM vipmembers
WHERE lastname = '$lastname'");
echo "<table border='1'>
<tr>
<th>member_id</th>
<th>firstname</th>
<th>lastname</th>
<th>email</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['member_id'] . "</td>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "</tr>";
}
echo "</table>";
}
else 
{
	echo "can't find the name in database";
}
mysqli_close($conn);
 
?>
