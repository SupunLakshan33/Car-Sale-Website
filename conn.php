<?php
$servername = "sql212.epizy.com";
$username = "epiz_31171890";
$password = "3mqyXpuEdWQXw";
$dbname = "epiz_31171890_slcarsdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// echo 'connected';

?>