<?php

include('./conn.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $sql = "SELECT passward FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $correct_password = $row['passward'];
        $input_password = $_POST['password'];
        if ($correct_password == $input_password) {
            echo 'Eq';
            $_SESSION['user'] = $email;
            $url = '/';
            header('Location: ' . $url, true, 303);
        }
        else {
            echo 'Not Eq';
        }
    }
    else {
        echo 'User Not Register';
    }
    
    mysqli_close($conn);


}
   


?>