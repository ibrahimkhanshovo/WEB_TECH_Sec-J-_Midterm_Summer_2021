<?php
session_start();
if(!isset($_SESSION['name']))
{
	header("Location:index.php");
}
?>
<html>
	<head>
		<title>Student Home</title>
		<link href="css/Home.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="main">
			<div class="header">
				<div class="headertext">
					<h2>Online Exam System</h2>
				</div>
				<div class="menu">
					<ul>
						<li><a href="Home.php">Home</a></li>
						<li><a href="Manage_User.php">edit profile</a></li>
						<li><a href="Result.php">Course</a></li>
						<li><a href="Account.php">show profile</a></li>
						<li><a href="Logout.php">Logout</a></li>
					</ul>
				</div>
			</div>
			<div class="thing">
				<div class="content">
					<div class="left">
						<div class="topic">
							<h2> Your Activity:</h2>
							<hr>
						</div>
						<div class="activity">
							<a href="AddingQues.php"><h3>Couser  Question </h3></a>
							<a href="ViewQues.php"><h3> View Question list</h3></a>
						
						</div>
					</div>
				</div>
			</div>
			
			<div class="footer">
			
			</div>
		</div>
	</body>
</html>