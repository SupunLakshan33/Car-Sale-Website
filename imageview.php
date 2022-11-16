<?php
    include('./conn.php');
    $id = $_GET['id'];
    $sql = "SELECT imgData,imageType FROM car WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    header("Content-type: " . $row["imageType"]);
    echo $row["imgData"];
	mysqli_close($conn);
?>