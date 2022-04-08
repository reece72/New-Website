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
  <h2>Chapter 2 - Processor Performance</h2>
</header>
  
  <article>
    <h1>Factors affecting Process Performance</h1>
    <p>Clock Speed measures the number of cycles your CPU executes per second and is measured in GHz (gigahertz). A CPU with a clock speed of 3.2 GHz executes 3.2 billion cycles per second. The speed of your CPU determines how fast you can execute instructions.</p>
    <p>Number of Cores allows computers to process more isntructions. CPUs nowadays will have multiple cores and that means they will have more power to run multiple programs at the same time.</p>
    <p>Cache Memory temporarily stores frequently used instructions and data for quicker processing by the central processing unit, since it is closer to the CPU than main memory, so instrictions can be fetched quicker.</p>
    <p>Pipelining is the process of accumulating instructions from the processor through a pipeline. It allows storing and executing instructions in an orderly process. So when the computer fetches an instruction and decodes it, it will fetch another instcution and so on.</p>
  </article>
</section>

</body>
</html>