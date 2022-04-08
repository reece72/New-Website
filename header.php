<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Computer Science Revision Website</title>
		<link rel="stylesheet" href="/website1/assets/css/main.css">
	</head>
	<body>

		<nav>
			<div class="wrapper">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="topics.php">Topics</a></li>
					<?php
						if(isset($_SESSION["useruid"])) {
							echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
						}
						else {
							echo "<li><a href='signup.php'>Sign Up</a></li>";
							echo "<li><a href='login.php'>Log In</a></li>";
						}
					?>
				</ul>
			</div>
		</nav>

	<div class="wrapper">