<?php 
  session_start();

  if(!isset($_SESSION['manager_loggedin']) || $_SESSION['manager_loggedin']!=true){
    header("location: manager_login.html");
    exit;
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="manager_interface.css">
</head>
<body>
    <div class="container">
        
        <div class="box1">
          <a href="manager_insert.html">Products</a>
        </div>
        <div class="box2">
         <a href="accessiories.html">Accessiories</a>
        </div>
        <div class="box3">
           <a href="manager_insert_driver.html">Driver</a>
        </div>
        <div class="box4">
            <a href="manager_car_approve.php">Car Approval</a>
         </div>
         <div class="box5">
            <a href="manager_driver_approve.php">Driver Approval</a>
         </div>
         <div class="box6">
            <a href="manager_accessiories_message.php">Accessiories Info</a>
         </div>
         <button type="submit"><a href="manager_logout.php">Log out</a></button>
         
        
    </div>
</body>
</html>