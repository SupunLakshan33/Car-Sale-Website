<?php
session_start();
?>
<?php
include('conn.php');
if($_SERVER["REQUEST_METHOD"] == "GET") {
    $email = $_SESSION['user'];
    $sql = "SELECT id,brand,model,conditions,discription,price,email FROM car WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $arr = array();
        while($row = mysqli_fetch_assoc($result)) {
          array_push($arr,$row);
        }
        echo json_encode($arr);
      } else {
        echo "0 results";
      }
    
    mysqli_close($conn);
}



?>