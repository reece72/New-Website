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
  <h2>Chapter 9 - The nature of applications</h2>
</header>
  
  <article>
    <h1>Systems Software</h1>
    <p>Systems software is a type of computer program that is designed to run a computer's hardware and application programs.</p>
  </article>
</section>

  <article>
    <h1>Utility Programs</h1>
    <p>Utility Software is system software that helps to maintain the proper and smooth functioning of a Computer System.</p>
    <p>Disk Defragmentation</p>
    <p>Automatic Backup</p>
    <p>Anti-virus</p>
    <p>Compression software</p>
  </article>
</section>

<article>
    <h1>Applications Software</h1>
    <p>General-purpose is software which has been designed to solve user's common or general tasks using a computer system.</p>
    <p>Special-purpose performs one specific task. This might include a playing music, payroll software or an application for revising maths.</p>
  </article>
</section>

<article>
    <h1>Closed-source and Open-source</h1>
    <p>Closed-source is software that holds the source code safe and encrypted. Meaning, the user can't copy, modify, or delete parts of the code without some type of consequence. It can go from voiding the warranty to even legal repercussions.</p>
    <p>Open-source make its source code available to others who would like to view that code, copy it, learn from it, alter it, or share it.</p>
  </article>
</section>

</body>
</html>