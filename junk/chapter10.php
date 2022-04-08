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
  <h2>Chapter 10 - Programming Language Translators</h2>
</header>

<article>
    <h1>Translators</h1>
    <p>Compilers are computer software that translates (compiles) source code written in a high-level language (C++) into a set of machine-language instructions that can be understood by a digital computer's CPU. </p>
    <p>Interpreters translates code into machine code, instruction by instruction then the CPU executes each instruction before the interpreter moves on to translate the next instruction. Interpreted code will show an error as soon as it hits a problem.</p>
  </article>
</section>

<article>
    <h1>Stages of Compilation</h1>
    <p>Lexical Analysis is when comments and unnecessary spaces are removed. Keywords, constants and identifiers are replaced by 'tokens', which are symbolic strings to identify what the elements are.</p>
    <p>Symbol Table Construction is a table stores the names and addresses of all variables, constants and arrays. Variables are then checked to make sure they have been declared and to determine the data types used.</p>
    <p>Syntax Analysis is when the tokens are checked to see if they match the syntax of the programming language and if syntax errors are found, error messages are produced.</p>
    <p>Semantic Analysis is when variables are checked to make sure they have been correctly declared and contain the correct data type. Operations are then checked to ensure that they are appropriate for the type of variable being used.</p>
    <p>Code Generation is whe Machine code is generated.</p>
    <p>Code Optimisation is wehn the program amkes the code more efficient and make sit run faster.</p>
    <p>Linkers after the compiler has created all the object files, another program is called to bundle them into an executable program file, which is a linker and the process of bundling them into the executable is called linking.</p>
    <p>Loaders are a part of operating system and is responsible for loading executable files into memory and execute them.</p>
    <p>Libraries are collections of prewritten code that users can use to optimize tasks</p>
  </article>
</section>

</body>
</html>

<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
</head>
<body>

<div class="dropdown">
  <button class="dropbtn">Quiz</button>
  <div class="dropdown-content">
  <a href="../test/test2.php">Take the test</a>
  </div>
</div>
</style>