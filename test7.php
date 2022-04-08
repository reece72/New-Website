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
  <h2>Section 7 - Data Structures Quiz</h2>
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
			if ($ans1 == '3') {
				$correct++;	
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans2 == 'Last In, First Out data structure') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans3 == 'First In, Last Out data structure') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans4 == 'Array') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans5 == 'Tuples') {
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
	<form action="test7.php" method="post">
		<p>How many ways can you traverse a binary tree?</p>
		<input type="varchar" name="ans1">
		</p>What is the concept of a stack?</p>
		<input type="varchar" name="ans2">
		<p>What is the concept of a queue?</p>
		<input type="varchar" name="ans3">
		<p>What is defined as a finite, ordered set of elemnets of the same type?</p>
		<input type="varchar" name="ans4">
		<p>What is an ordered set of values?</p>
		<input type="varchar" name="ans5">
		<input type="submit">
	</form>