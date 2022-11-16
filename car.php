
<?php
    include('./conn.php');
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $condition = $_POST['condition'];
        $price = $_POST['price'];
        $email = $_POST['email'];
        $discription = $_POST['discription'];
        $imgData = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
        $imageProperties = getimageSize($_FILES['photo']['tmp_name']);
        $sql = "INSERT INTO car(brand,model,conditions,price,discription,imgData,imageType,email) VALUES ('$brand','$model','$condition','$price','$discription','{$imgData}','{$imageProperties['mime']}','$email')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            header('Location:'.'/profile.html', true, 303);
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
        mysqli_close($conn);
    }

?>