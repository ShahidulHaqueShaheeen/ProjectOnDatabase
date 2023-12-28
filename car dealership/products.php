<?php 
    session_start();
    
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: login.html");
        exit;
    }


?>



<?php 

    $con = mysqli_connect("localhost", "root", "", "car_dealership");
    $query = "SELECT * FROM car_info";

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
            <li><a href="accessiories.php">Accessiories</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="logout.php">Log out</a></li>
        </ul>
        </div>
    <div class="header">
        <h1>Rent From Below With The chipest Price!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus saepe aut ex eum, veniam cum ea magnam incidunt porro. Earum.</p>
    </div>
    <div class="gallary">
        <?php



        
        while($row = mysqli_fetch_array($result)) {

           echo "<div class='content'>";

        
           echo "<img src=".$row['image']. " width = '200px' height='200px' alt='Error loading image'>";
           echo "<h3>".$row['name']."</h3>";
           echo "<p>".$row['description']."</p>";
           echo "<h6>".$row['price']."</h6>";
           echo "<h5>".$row['available']."<h5>";
           echo "<a href = details.php?car_id=".$row['car_id'].">details</a>";
          
        echo "</div>";
        }

       ?>

      

  

 

    

    </div>
</body>
</html>