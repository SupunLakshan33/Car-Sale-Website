
<?php

include('./conn.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $nic = $_POST['nic'];
    $city = $_POST['city'];
    $pword = $_POST['password'];
    $sql = "INSERT INTO users(email,fname,lname,nic,city,passward) VALUES('$email','$fname','$lname','$nic','$city','$pword')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header('Location: ' . '/log.html', true, 303);
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      mysqli_close($conn);
}

?>