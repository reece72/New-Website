<?php

$serverName = "localhost";
$dBUsername = "db_user";
$dBPassword = "db_user_1";
$dBName = "phpwebsite";


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// $sql = "SELECT * FROM pages";
// $result = mysqli_query($conn, $sql);
// $resultCheck = mysqli_num_rows($result);

// if ($resultCheck > 0) {
// 	while ($row - mysqli_fetch_assoc($result)) {
// 		echo $row['chapterID'] . "<br>";
// 	}
// }