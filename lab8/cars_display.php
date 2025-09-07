<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="utf-8" /> 
  <meta name="description" content="Web application development" /> 
  <meta name="keywords" content="PHP" /> 
  <meta name="author"   content="Your Name" /> 
  <title>TITLE</title> 
</head> 
<body> 
<h1>Web Programming - Lab08</h1> 
<?php  
  require_once ("settings.php"); 
 
$con=mysqli_connect("feenix-mariadb.swin.edu.au","s103582323","010302","s103582323_db");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT car_id,make,model,price FROM cars");

echo "<table border='1'>
<tr>
<th>car_id</th>
<th>make</th>
<th>model</th>
<th>price</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['car_id'] . "</td>";
echo "<td>" . $row['make'] . "</td>";
echo "<td>" . $row['model'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
 
?> 
</body> 
</html> 