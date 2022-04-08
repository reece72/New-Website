<?php
	include_once 'header.php';
?>

<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

header {
  background-color: #666;
  padding: 2px;
  text-align: center;
  font-size: 35px;
  color: white;
}

nav {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  background: #ccc;
  padding: 20px;
}

/* Style the content */
article {
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  background-color: #f1f1f1;
  padding: 10px;
}

}
</style>
</head>
<body>

<header>
  <h2>Create your Account</h2>
</header>

</body>
</html>


		<section class="signup-form">
			<h2>Sign Up</h2>
			<form action="includes/signup.inc.php" method="post">
				<input type="text" name="name" placeholder="Full Name...">
				<input type="text" name="email" placeholder="Email...">
				<input type="text" name="uid" placeholder="Username...">
				<input type="password" name="pwd" placeholder="Password...">
				<input type="password" name="pwdrepeat" placeholder="Repeat Password...">
				<button type="submit" name="submit">Sign Up - Please enter all your details!</button>
			</form>
		</section>

		<?php
			if (isset($_GET["error"])) {
				if ($_GET["error"] == "emptyinput") {
					echo "<p>Fill in all fields!</p>";
				}
				else if ($_GET["error"] == "invaliduid") {
					echo "<p>Choose a proper username!</p>";
				}
				else if ($_GET["error"] == "invalidemail") {
					echo "<p>Choose a proper email!</p>";
				}
				else if ($_GET["error"] == "passwordsdontmatch") {
					echo "<p>Passwords dont match!</p>";
				}
				else if ($_GET["error"] == "stmtfailed") {
					echo "<p>Something went wrong, please try again!</p>";
				}
				else if ($_GET["error"] == "usernameistaken") {
					echo "<p>Username or email is taken, please choose a different one!</p>";
				}
				else if ($_GET["error"] == "none") {
					echo "<p>You have signed up!</p>";
				}
			}
		?>

<?php
	include_once 'footer.php';
?>