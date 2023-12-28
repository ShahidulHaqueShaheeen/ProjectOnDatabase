<?php 
    $con = mysqli_connect("localhost", "root", "", "car_dealership");
    $query = "SELECT * FROM driver_info";

    $result = mysqli_query($con, $query);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="product.css">
</head>
<body>
    <div class="navbar">

        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        </div>
    <div class="header">
        <h1>Hire From Below With The chipest Price!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus saepe aut ex eum, veniam cum ea magnam incidunt porro. Earum.</p>
    </div>
    <div class="gallary">
        <?php



        
        while($row = mysqli_fetch_array($result)) {

           echo "<div class='content'>";

        
           echo "<h3>".$row['name']."</h3>";
           echo "<p>".$row['experience']."</p>";
           echo "<h6>".$row['rating']."</h6>";
           echo "<h2>".$row['phone_number']."</h2>";
           echo "<h5>".$row['available_status']."<h5>";
           echo "<a href = driver_details.php?li_no=".$row['li_no'].">details</a>";
        echo "</div>";
        }
       ?>