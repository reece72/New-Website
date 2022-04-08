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
  <h2>A-Level Computer Science Revision Website</h2>
</header>
		
		<section class="index-intro">
			<?php
				if (isset($_SESSION["useruid"])) {
				echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
				}
			?>
			
			<h1>A-Level Computer Science</h1>

			<p style="text-align:center;font-size:30px;"> This is an A-Level Computer Science Revision Website, created by an A-Level Computer Science student who knows how hard it is to revise fo the various challenging Computer Science Topics and have created this website to allow others to reuse my notes that have helped me learn about the various different Computer Science topics.

			I have created a account system for users to create their own profile to keep track off their revsion and what they want to revise next. Within this website I have clearly set out a navigation system at the top of the website which allows you to easily navigate between your account and the other pages. I have also created a topics page where you can go chapter by chapter to see what Computer Science topics that you need to revise and at the end of each section there is a test for you to test your knowledge of what you have learnt. </p>
		</section>
	</body>	
	</html>

<?php
	include_once 'footer.php';
?>