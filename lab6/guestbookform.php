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
<h1>Lab 6 Task 2 - Guestbook</h1> 
<h2>Enter your details to sign our guest book</h2>
<form action = "guestbooksave.php" method = "post"> 
<p>Name: <input type="text" name="name"></p>
<p>E-mail: <input type="email" name="email"></p>
<input type="submit" name="submit" value="sign">
<input type="reset" value="reset form" name="reset">
</form> 
</body> 
</html> 