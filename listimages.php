<?php
    include("conn.php");
    
    $brand = $_GET['brand'];
    $model = $_GET['model'];
    $sql = "SELECT * FROM car WHERE brand='$brand' AND model='$model'"; 
    $result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
<div class="w3-panel">
    <a href="/">home</a>
<?php
    if ($result->num_rows > 0) {
	while($row = mysqli_fetch_array($result)) {
	?>
		<div class="w3-container">
        <img class="w3-image" src="imageview.php?id=<?php echo $row["id"]; ?>" /><br/>
        <ul class="w3-ul">
            <li>brand:<?php echo $row["brand"] ?></li>
            <li>model:<?php echo $row["model"] ?></li>
            <li>condition:<?php echo $row["conditions"] ?></li>
            <li>discription:<?php echo $row["discription"] ?></li>
            <li>price:<?php echo $row["price"] ?></li>
            <li>email:<?php echo $row["email"] ?></li>
        </ul>
        </div>
<?php		
	}
    mysqli_close($conn);
}
else {
?>
<h1>no result found!</h1>
<?php
}
?>
</div>
</body>
</html>