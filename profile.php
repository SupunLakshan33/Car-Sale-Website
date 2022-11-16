<?php
session_start();
?>

<?php

include('conn.php');
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $email = $_SESSION['user'];
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
    mysqli_close($conn);
}







?>