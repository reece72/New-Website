<?php
	include_once 'header.php';
?>
<?php

  //connect to db

  require_once 'dbh.inc.php';

  //set sql
  $sql = 'Select * from topics';
  //get the topics
  $result = $conn->query($sql);
  //loop
  while($row = $result->fetch_assoc()) {
    echo '<div class="dropbtn">';
    echo "<br>". $row["name"]."";
    echo '</div>';
  }
?>

<div class="dropdown">
  <button class="dropbtn">Section 1 - 
<br>
  Components of a Computer</button>
  <div class="dropdown-content">
  <a href="/website1/chapter.php?chapterID="..> Chapter 1 - Processor Components </a>

  <!-- <a href="/website1/chapter.php?chapterID=2"> Chapter 2 - Processor Performance</a>
  <a href="/website1/chapter.php?chapterID=3"> Chapter 3 - Types of Processors</a>
  <a href="/website1/chapter.php?chapterID=4"> Chapter 4 - Input Devices</a>
  <a href="/website1/chapter.php?chapterID=5"> Chapter 5 - Output Devices</a>
  <a href="/website1/chapter.php?chapterID=6"> Chapter 6 - Storage Devices</a> -->
  </div>
</div>

<div class="dropdown2">
  <button class="dropbtn2">Section 2 - 
<br>
  Systems Software</button>
  <div class="dropdown2-content">
  <a href="/website1/chapter.php?chapterID=7"> Chapter 7 - Functions of an Operating System</a>
  <a href="/website1/chapter.php?chapterID=8"> Chapter 8 - Types of Operating Systems</a>
  <a href="/website1/chapter.php?chapterID=9"> Chapter 9 - The nature of applications</a>
  <a href="/website1/chapter.php?chapterID=10"> Chapter 10 - Programming Language Translators</a>
  </div>
</div>

<div class="dropdown3">
  <button class="dropbtn3">Section 3 - 
<br>
  Software Development</button>
  <div class="dropdown3-content">
  <a href="/website1/chapter.php?chapterID=11"> Chapter 11 - Systems Analysis Methods</a>
  <a href="/website1/chapter.php?chapterID=12"> Chapter 12 - Writing and Following Methods</a>
  <a href="/website1/chapter.php?chapterID=13"> Chapter 13 - Programming Paradigms</a>
  <a href="/website1/chapter.php?chapterID=14"> Chapter 14 - Assembly Language</a>
  </div>
</div>

<div class="dropdown4">
  <button class="dropbtn4">Section 4 - 
<br>
  Exchanging Data</button>
  <div class="dropdown4-content">
  <a href="/website1/chapter.php?chapterID=15"> Chapter 15 - Compression, Encryption and Hashing</a>
  <a href="/website1/chapter.php?chapterID=16"> Chapter 16 - Database Concepts</a>
  <a href="/website1/chapter.php?chapterID=17"> Chapter 17 - Relational Databases and Normalisation</a>
  <a href="/website1/chapter.php?chapterID=18"> Chapter 18 - Introduction to SQL</a>
  <a href="/website1/chapter.php?chapterID=19"> Chapter 19 - Defining and Updating tables using SQL</a>
  <a href="/website1/chapter.php?chapterID=20"> Chapter 20 - Transaction Processing</a>
  </div>
</div>

<div class="dropdown5">
  <button class="dropbtn5">Section 5 - 
<br>
  Network and Web Technologies</button>
  <div class="dropdown5-content">
  <a href="/website1/chapter.php?chapterID=21"> Chapter 21 - Structure of the Internet</a>
  <a href="/website1/chapter.php?chapterID=22"> Chapter 22 - Internet Communication</a>
  <a href="/website1/chapter.php?chapterID=23"> Chapter 23 - Network Security and Threats</a>
  <a href="/website1/chapter.php?chapterID=24"> Chapter 24 - HTML and CSS</a>
  <a href="/website1/chapter.php?chapterID=25"> Chapter 25 - Web Forms and JavaScript</a>
  <a href="/website1/chapter.php?chapterID=26"> Chapter 26 - Search Engine Indexing</a>
  <a href="/website1/chapter.php?chapterID=27"> Chapter 27 - Client-Server and Peer-to-Peer</a>
  </div>
</div>

<div class="dropdown6">
  <button class="dropbtn6">Section 6 - 
<br>
  Data Types</button>
  <div class="dropdown6-content">
  <a href="/website1/chapter.php?chapterID=28"> Chapter 28 - Primitive Data Types, Binary and Hexadecimal</a>
  <a href="/website1/chapter.php?chapterID=29"> Chapter 29 - ASCII and Unicode</a>
  <a href="/website1/chapter.php?chapterID=30"> Chapter 30 - Binary Arithmetic</a>
  <a href="/website1/chapter.php?chapterID=31"> Chapter 31 - Floating Point Arithmetic</a>
  <a href="/website1/chapter.php?chapterID=32"> Chapter 32 - Bitwise Manipulation and Masks</a>
  </div>
</div>

<div class="dropdown7">
  <button class="dropbtn7">Section 7 - 
<br>
  Data Structures</button>
  <div class="dropdown7-content">
  <a href="/website1/chapter.php?chapterID=20">Chapter 33 - Arrays, Tuples and Records</a>
  <a href="topicpages/chapter34.php">Chapter 34 - Queues</a>
  <a href="topicpages/chapter35.php">Chapter 35 - Lists and Linked Lists</a>
  <a href="topicpages/chapter36.php">Chapter 36 - Stacks</a>
  <a href="topicpages/chapter37.php">Chapter 37 - Hash Tables</a>
  <a href="topicpages/chapter38.php">Chapter 38 - Graphs</a>
  <a href="topicpages/chapter39.php">Chapter 39 - Trees</a>
  </div>
</div>

<div class="dropdown8">
  <button class="dropbtn8">Section 8 - 
<br>
  Boolean Algebra</button>
  <div class="dropdown8-content">
  <a href="topicpages/chapter40.php">Chapter 40 - Logic Gates and Truth Tables</a>
  <a href="topicpages/chapter41.php">Chapter 41 - Simplifying Boolean Expressions</a>
  <a href="topicpages/chapter42.php">Chapter 42 - Karnaugh Maps</a>
  <a href="topicpages/chapter43.php">Chapter 43 - Adders and D-type flip-flops</a>
  </div>
</div>

<div class="dropdown9">
  <button class="dropbtn9">Section 9 - 
<br>
  Legal, Moral, Ethical and Cultural Issues</button>
  <div class="dropdown9-content">
  <a href="topicpages/chapter44.php">Chapter 44 - Computing Related Legislation</a>
  <a href="topicpages/chapter45.php">Chapter 45 - Ethical, Moral and Cultural Issues</a>
  <a href="topicpages/chapter46.php">Chapter 46 - Privacy and Censorship</a>
  </div>
</div>

<div class="dropdown10">
  <button class="dropbtn10">Section 10 - 
<br>
  Computational Thinking</button>
  <div class="dropdown10-content">
  <a href="topicpages/chapter47.php">Chapter 47 - Thinking Abstractly</a>
  <a href="topicpages/chapter48.php">Chapter 48 - Thinking Ahead</a>
  <a href="topicpages/chapter49.php">Chapter 49 - Thinking Procedurally</a>
  <a href="topicpages/chapter50.php">Chapter 50 - Thinking Logically, Thinking Concurrently</a>
  <a href="topicpages/chapter51.php">Chapter 51 - Problem Recognition</a>
  <a href="topicpages/chapter52.php">Chapter 52 - Problem Solving</a>
  </div>
</div>

<div class="dropdown11">
  <button class="dropbtn11">Section 11 - 
<br>
  Programming Techniques</button>
  <div class="dropdown11-content">
  <a href="topicpages/chapter53.php">Chapter 53 - Programming Basics</a>
  <a href="topicpages/chapter54.php">Chapter 54 - Selection</a>
  <a href="topicpages/chapter55.php">Chapter 55 - Iteration</a>
  <a href="topicpages/chapter56.php">Chapter 56 - Subroutines and Recurison</a>
  <a href="topicpages/chapter57.php">Chapter 57 - Use of an IDE</a>
  <a href="topicpages/chapter58.php">Chapter 58 - Use of Object-Oriented Techniques</a>
  </div>
</div>

<div class="dropdown12">
  <button class="dropbtn12">Section 12 - 
<br>
  Algorithms</button>
  <div class="dropdown12-content">
  <a href="topicpages/chapter59.php">Chapter 59 - Analysis and Design of Algorithms</a>
  <a href="topicpages/chapter60.php">Chapter 60 - Searching Algorithms</a>
  <a href="topicpages/chapter61.php">Chapter 61 - Bubble Sort and Insertion Sort</a>
  <a href="topicpages/chapter62.php">Chapter 62 - Merge Sort and Quick Sort</a>
  <a href="topicpages/chapter63.php">Chapter 63 - Graph Traversal ALgorithms</a>
  <a href="topicpages/chapter64.php">Chapter 64 - Optimisation Algorithms</a>
  </div>
</div>

<?php
	include_once 'footer.php';
?>