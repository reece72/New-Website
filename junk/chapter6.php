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
  <h2>Chapter 6 - Storage Devices</h2>
</header>
  
  <article>
    <h1>Secondary Storage</h1>
    <p>Secondary storage is non-volatile, long-term storage. It is used to keep programs and data indefinitely. Without secondary storage, all programs and data would be lost the moment the computer is switched off.</p>
  </article>
</section>

  <article>
    <h1>Hard Disk</h1>
    <p>Hard disk, also called hard disk drive or hard drive, magnetic storage medium for a computer. Hard disks are flat circular plates made of aluminum or glass and coated with a magnetic material. Hard disks for personal computers can store terabytes of information.</p>
  </article>
</section>

  <article>
    <h1>Optical Disk</h1>
    <p>An optical disk is any computer disk that uses optical storage techniques and technology to read and write data. It is a storage device in which optical energy is used. It is a computer storage disk that stores data digitally and uses laser beams to read and write data.</p>
  </article>
</section>

  <article>
    <h1>RAM and ROM</h1>
    <p>RAM stands for 'Random Access Memory' and  is one of the most fundamental elements of computing. RAM is the super-fast and temporary data storage space that a computer needs to access right now or in the next few moments.</p>
    <p>ROM stands for 'Read Only Memory' is a flash memory chip that contains a small amount of non-volatile memory. Non-volatile means that its contents cannot be changed and it retains its memory after the computer is turned off. ROM contains the BIOS which is the firmware for the motherboard.</p>
  </article>
</section>

  <article>
    <h1>Virtual Storage</h1>
    <p>Virtual memory is a section of volatile memory created temporarily on the storage drive. It is created when a computer is running many processes at once and RAM is running low.</p>
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
  position: relative;
  left: 1550px;
  bottom: 120px;
  padding: 50px 75px;
}

.dropdown {
  position: absolute;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: fixed;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  left: 1600px;
  bottom: 10px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #778899}

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
  <button class="dropbtn">Section 1 Topic Quiz</button>
  <div class="dropdown-content">
  <a href="../test/test1.php">Take the Test</a>
  </div>
</div>
</style>