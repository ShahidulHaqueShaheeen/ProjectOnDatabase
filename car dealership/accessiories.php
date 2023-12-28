<?php 
    $con = mysqli_connect("localhost", "root", "", "car_dealership");
    $query = "SELECT * FROM accessiories";

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
            <li><a href="products.php">Rent a car</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        </div>
    <div class="header">
        <h1>Buy From Below With The chipest Price!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus saepe aut ex eum, veniam cum ea magnam incidunt porro. Earum.</p>
    </div>
    <div class="gallary">
        <?php



        
        while($row = mysqli_fetch_array($result)) {

           echo "<div class='content'>";

        
           echo "<img src=".$row['image']. " width = '200' height='200' alt='Error loading image'>";
           echo "<h3>".$row['name']."</h3>";
           echo "<p>".$row['special_feature']."</p>";
           echo "<h6>".$row['price']."</h6>";
           echo "<h5>".$row['brand']."<h5>";
           echo "<a href = accessiories_details.php?product_id=".$row['product_id'].">details</a>";
        echo "</div>";
        }
       ?>