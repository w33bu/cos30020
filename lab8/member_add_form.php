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
<h2>Enter your details</h2>
<form action = "member_add.php" method = "post"> 
<p>first name: <input type="text" name="fname">  </p>
<p>last name: <input type="text" name="lname"> </p>
<p>gender(M or F): <input type="text" name="gender"> </p>
<p>Email: <input type="text" name="email"> </p>
<p>phone number: <input type="number" name="pnumber"> </p>
<input type="submit" name="submit" value="sign">
<input type="reset" value="reset form" name="reset">
</form> 
</body> 
</html> 