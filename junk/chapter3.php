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
  <h2>Chapter 3 - Types of Processors</h2>
</header>
  
  <article>
    <h1>Memory and Stored Program Concept</h1>
    <p>Von Neumann Machine is where the same data bus is used to transfer both data and instructions and a single address bus is used to transfer the addresses of data and instructions.</p>
    <p>Harvard Architecture is a computer architecture with separate memories for instructions and data.</p>
  </article>
</section>

  <article>
    <h1>CISC and RISC</h1>
    <p>CISC refers to Complex Instruction Set Computers where a large instruction set is used to accomplish tasks in a few lines of assembly langauge as possible.</p>
    <p>RISC refers to Reduced Instrucion Set Computers where it uses only simple instructions, each taking one clock cycle to be executed.</p>
  </article>
</section>

  <article>
    <h1>Processors</h1>
    <p>Co-Processor Systems is an extra processor used to supplement the functions of the primary processor and it may be used to perform floating point, arithmetic, graphics processing and other functions.</p>
    <p>Multicore and Parallel Systems are able to distribute workload accross multiple CPU cores which will recieve higher performance.</p>
    <p>Graphics Processing Unit (GPU) is a specialised electronic circuit that is very effective at manipulating computer graphics and image-processing.</p>
  </article>
</section>

</body>
</html>