<?php
  session_start();
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>

<?php 
    // connection to db

    require_once 'dbh.inc.php';
    // query chapter
    $chapter = $_GET['chapterID'];
    $sql = 'Select * from pages where chapterID = '.$chapter.' limit 1';
    $result = $conn->query($sql);

    // display
    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
          echo '<h1>'.$row["chapterTitle"].'</h1>';
          echo '<p>'.$row["chapterContent"].'</p>';
        
      } else {
        echo "invalid chapter";
      }
      $conn->close();


?>

<?php
	include_once 'footer.php';
?>