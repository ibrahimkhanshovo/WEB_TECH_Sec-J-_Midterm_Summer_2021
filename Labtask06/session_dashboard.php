<?php
	session_start();
	if(!isset($_SESSION["user"])){
		header("Location:login.php");
	}
		
?>
<html>
	<body>
		<h1> Welcome!  <?php echo $_SESSION["user"];?> </h1>
		<a href="changepassSession.php">Change Password</a>
	<body>
</html>