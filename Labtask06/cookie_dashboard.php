<?php
	session_start();
	if(!isset($_COOKIE["user"])){
		header("Location:login.php");
	}
		
?>
<html>
	<body>
		<h1> Welcome!  <?php echo $_COOKIE["user"];?> </h1>
		<a href="changepassCookie.php">Change Password</a><br>
	<body>
</html>