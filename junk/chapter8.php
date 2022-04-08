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
  <h2>Chapter 8 - Types of Operating System</h2>
</header>
  
  <article>
    <h1>Types of Operating Systems</h1>
    <p>Distributed</p>
    <p>Multi-tasking</p>
    <p>Multi-user, Multi-tasking</p>
    <p>Embedded</p>
    <p>Real-time</p>
  </article>
</section>

  <article>
    <h1>Features of an operating system are: allows disk access and file systems, device drivers, security, program execution, memory management, multitasking and handling I/O operations.</h1>
    <p>Basic Input Output System (BIOS) is the Basic Input/Output System and is the built-in core processor software responsible for booting up your system. Typically embedded into your computer as a motherboard chip.</p>
    <p>Device Drivers s a set of files that tells a piece of hardware how to function by communicating with a computer's operating system.</p>
  </article>
</section>

</body>
</html>