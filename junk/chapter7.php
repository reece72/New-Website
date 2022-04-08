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
  <h2>Chapter 7 - Functions of an Operating System</h2>
</header>
  
  <article>
    <h1>What is an Opearting System</h1>
    <p>Operating systems contain and manage all the programs and applications that a computer or mobile device is able to run, which means managing the device's software and hardware functions.</p>
  </article>
</section>

  <article>
    <h1>Functions of an Operating System</h1>
    <p>Memory Management is the process of controlling and coordinating computer memory, assigning portions called blocks to various running programs to optimize overall system performance.</p>
    <p>Interrupt Service Routine (ISR) is a software routine that hardware invokes in response to an interrupt. ISR examines an interrupt and determines how to handle it executes the handling, and then returns a logical interrupt value.</p>
    <p>Processor Scheduling is the allocation of a computer's processor power to specific tasks. The practice uses the term "scheduling" because it assigns a specific percentage of time the processor is running to individual tasks.</p>
    <p>Peripheral Management communicate and control devices such as mice, keyboards, monitors and printers.</p>
  </article>
</section>

</body>
</html>