		<?php 
		$str = $_POST['str'];
		$pattern = "/[^A-Za-z]/";
		
		$str = preg_replace($pattern, "", $str);
		echo $str;
		 if (strcmp($str,strrev($str)) ==0){
			 echo"<p>this is a standard palindrome</p>";
		 }
		 else
		 {
			 echo"<p>this is not a standard palindrome</p>";
		 }
		?>
	</body>
</html>