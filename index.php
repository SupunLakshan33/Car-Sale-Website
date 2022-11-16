<?php
session_start();
if ($_SESSION['user']) {
    $show_profile = True;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxuryMotors | home</title>
    <link rel="stylesheet" href="/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-image: url("/car.jpg");
            background-color: #cccccc; 
            height: 500px; 
            background-position: center; 
            background-repeat: no-repeat; 
            background-size: cover; 
            }
    </style>
</head>
<body>
    <div class="w3-bar w3-green">
        <span  class="w3-bar-item w3-button">LuxuryMotors&nbsp;<i class="fa fa-car"></i></span>
        <span  class="w3-bar-item w3-button"><?php echo $_SESSION['user']?></span>
        <?php 
            if ($_SESSION['user']) {
        ?>
        <a href="/profile.html" class="w3-bar-item w3-button w3-right">profile</a>
        <?php
            }
        ?>
        <?php 
            if ($_SESSION['user']=="admin@gmail.com") {
        ?>
        <a href="/memberlist.html" class="w3-bar-item w3-button w3-right">memberlist</a>
        <?php
            }
        ?>
        <?php 
            if ($_SESSION['user']) {
        ?>
        <a href="/sell.html" class="w3-bar-item w3-button w3-right">Sellcar</a>
        <?php
            }
        ?>
        <?php 
            if (!$_SESSION['user']) {
        ?>
        <a href="/reg.html" class="w3-bar-item w3-button w3-right">Register</a>
        <?php
            }
        ?>
        <?php 
            if (!$_SESSION['user']) {
        ?>
        <a href="/log.html" class="w3-bar-item w3-button w3-right">Log</a>
        <?php
            }
        ?>
        <?php 
            if ($_SESSION['user']) {
        ?>
        <button class="w3-bar-item w3-button w3-right" onclick="delete document.cookie">Logout</button>
        <?php
            }
        ?>
        
        
    </div>
    <div class="w3-container">
        <div class="w3-container w3-border w3-margin-top w3-padding-64 w3-center">
            <h1 style="font-weight:800;color:red" class="w3-wide">Find the Best Vehicle For You</h1>
            <form action="/listimages.php" method="GET">
                <select name="brand" id="" class="w3-input w3-third w3-round-large">
                    <option >Select brand</option>
                    <option value="mitsubishi">Mitsubishi</option>
                    <option value="nissan">Nissan</option>
                    <option value="suzuki">Subaru</option>
                    <option value="toyota">Toyota</option>
                    <option value="honda">Honda</option>
                </select>
                
                <select name="model" id="" class="w3-input w3-third w3-right w3-round-large">
                    <option value="">Select model</option>
                    <option value="blue bird">Blue Bird</option>
                    <option value="wrx sti">Wrx Sti</option>
                    <option value="corolla">Corolla</option>
                    <option value="civic">Civic</option>
                    <option value="lancer">Lancer</option>
                </select>
                <br>
                <br>
                <br>
                <div class="w3-bar">
                <button type="submit" class="w3-button w3-block w3-red w3-left-align">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="w3-bar w3-green w3-bottom">
        <span  class="w3-bar-item w3-button">Copyright &copy; 2021</span>
        <span  class="w3-bar-item w3-button w3-right">Design by DMSLUK DISSANAYAKA</span>
    </div>
</body>
</html>