<?php
	$name="";
	$pass="";
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		$uname=$_POST ["uname"];
		$pass=$_POST["pass"];
	if($uname=="Feekra" && $pass=="123456"){
		session_start();
		$_SESSION["user"]=$uname;
		header("Location: session_dashboard.php");
		}
	}	
?>
<html>
	<head></head>
		<body>

			<form method="post">
				<input type="text" name="uname" placeholder="username"><br>
				<input type="password" name="pass" placeholder="password"><br>
				<input type="submit" value="Login">

			</form>



		</body>
</html>