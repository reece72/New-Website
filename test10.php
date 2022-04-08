<?php
  session_start();
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
  </head>

  <nav>
      <div class="wrapper">
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="../topics.php">Topics</a></li>
          <?php
            if(isset($_SESSION["useruid"])) {
              echo "<li><a href='../includes/logout.inc.php'>Logout</a></li>";
            }
            else {
              echo "<li><a href='../signup.php'>Sign Up</a></li>";
              echo "<li><a href='../login.php'>Log In</a></li>";
            }
          ?>
        </ul>
      </div>
    </nav>

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
  <h2>Section 10 - Computational Thinking Quiz</h2>
</header>

</body>
</html>
	
<?php
	if (!empty($_POST)) {
		$ans1 = $_POST['ans1'];
		$ans2 = $_POST['ans2'];
		$ans3 = $_POST['ans3'];
		$ans4 = $_POST['ans4'];
		$ans5 = $_POST['ans5'];
		$correct = 0;
			if ($ans1 == 'involves taking that complex problem and breaking it down into a series of smaller, more manageable problems') {
				$correct++;	
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans2 == 'by creating a model about the problem') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans3 == 'you look at potential problems that the project may have') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans4 == 'use a procedure to carry out a squence of steps') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans5 == 'identify where decisions need to be made') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			echo "<p>You got $correct correct!</p>";
			$grade = ($correct / 5) * 100;
			if ($correct == 0) {
				echo"<p>You got 0/5!</p>";
			} elseif ($correct == 1) {
				echo "<p>You got 1/5!</p>";
			} elseif ($correct == 2) {
				echo "<p>You got 2/5!</p>";
			} elseif ($correct == 3) {
				echo "<p>You got 3/5!</p>";
			} elseif ($correct == 4) {
				echo "<p>You got 4/5!</p>";
			} else {
				echo "<p>Great job! You aced it! 5/5</p>";
			}
		}

?>
	<form action="test10.php" method="post">
		<p>What is computational thinking?</p>
		<input type="varchar" name="ans1">
		</p>How do you think abstractly?</p>
		<input type="varchar" name="ans2">
		<p>How do you think ahead?</p>
		<input type="varchar" name="ans3">
		<p>How do you think procedurally?</p>
		<input type="varchar" name="ans4">
		<p>How do you think logically?</p>
		<input type="varchar" name="ans5">
		<input type="submit">
	</form>