<?php
$conn=mysqli_connect("feenix-mariadb.swin.edu.au","s103582323","010302","s103582323_db");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE if not exists vipmembers (
member_id INT(6) AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(40),
lastname VARCHAR(40),
gender VARCHAR(1),
email VARCHAR(40),
phone VARCHAR(20)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table vipmembers created successfully \n";
} else {
  echo "Error creating table: " . $conn->error;
}
if(isset($_POST['submit']))
{ 
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$phone = $_POST["pnumber"];
$sql = "INSERT INTO vipmembers (firstname, lastname, gender, email, phone)
VALUES ('$fname', '$lname', '$gender', '$email', '$phone')";
if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully \n";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
echo "<a href='vip_member.php'>return to main page</a><br />"
?>