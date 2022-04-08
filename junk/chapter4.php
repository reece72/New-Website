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
  <h2>Chapter 4 - Input Devices</h2>
</header>
  
  <article>
    <h1>Input Devices</h1>
    <p>Barcodes consist of bars and spaces and is a machine-readable representation of numerals and characters. A barcode consists of bars and spaces of varying width that can be read with an optical barcode scanner.</p>
    <p>Barcode Readers is a hand-held or stationary input device used to capture and read information contained in a bar code.</p>
    <p>Laser Scanners use a laser beam as the light source.</p>
    <p>Cameras sensor consists of millions of tiny light sensors arranged in a grid and the binary data is recorded onto teh cameras memory card so that the image can be reproduced using software.</p>
  </article>
</section>

  <article>
    <h1>Radio Frequency Identification</h1>
    <p>RFID tags are a type of tracking system that uses radio frequency to search, identify, track, and communicate with items and people. RFID tags are smart labels that can store a range of information from serial numbers, to a short description, and even pages of data.</p>
    <p>Active Tags include a battery to power the tagso that it actively transmits a signal for the reader to pick up.</p>
    <p>Passive Tags are cheaper to produce and do not contain a battery but rely on radio waves edmitted from a reader up to a metre away.</p>
  </article>
</section>

</body>
</html>