
<?php

include("conn.php");

if($_SERVER["REQUEST_METHOD"] == "GET") {
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $users = array();
        while($row = mysqli_fetch_assoc($result)) {
          array_push($users,$row);
        }
        echo json_encode($users);
      } else {
        echo "0 results";
      }
    mysqli_close($conn);
}

?>
