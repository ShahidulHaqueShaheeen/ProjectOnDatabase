<?php 
    $con=mysqli_connect("localhost", "root", "", "car_dealership");
    $car_id = $_GET['car_id'];
    $query = "SELECT * FROM car_info where car_id=".$car_id;

    $result = mysqli_query($con, $query);

    

?>
<style>
<?php include 'details.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="details.css">
</head>
<body>
  
    <div class="container">
    <?php 
    
    while($row = mysqli_fetch_array($result)){
        
        echo "<div class='details'>";
            
            echo "<h2>Name:</h2>";echo"<h2>".$row['name']."</h2>";
            echo "<h3>Car ID:</h3>";echo "<h3>".$row['car_id']."</h3>";
            echo "<h3>Price:</h3>";echo "<h3>".$row['price']."</h3>";
            echo "<h2>available status:</h2>";echo "<p>".$row['available']."</p>";
            echo "<h3>Exterior:</h3>";echo "<h3>".$row['exterior_color']."</h3>";
            echo "<h3>Interior:</h3>";echo "<h3>".$row['interior_color']."</h3>";
            echo "<h3>Drivetrain:</h3>";echo "<h3>".$row['drivetrain']."</h3>";
            echo "<h3>MPG:</h3>";echo "<h3>".$row['mpg']."</h3>";
            echo "<h3>Transmission:</h3>";echo "<h3>".$row['transmission']."</h3>";
            echo "<h3>Milage:</h3>";echo "<h3>".$row['milage']."</h3>";
            echo "<h3>VIN:</h3>";echo "<h3>".$row['vin']."</h3>";
            echo "<h3>Stock:</h3>";echo "<h3>".$row['stock']."</h3>";
            echo "<h3>Entertainment:</h3>";echo "<h3>".$row['entertainment']."</h3>";
            echo "<h3>Safety:</h3>";echo "<h3>".$row['safety']."</h3>";
            echo "<h3>Seating:</h3>";echo "<h3>".$row['seating']."</h3>";
            echo "<h3>Rating:</h3>";echo "<h3>".$row['rating']."</h3>";
            
            echo "<h3>Payment:</h3>";echo "<h3>".$row['paypal_id']."</h3>";
        echo"</div>";


       echo"<div class='description'>";
       echo"<h1>Description</h1>";
       echo "<h3>".$row['description']."</h3>";
       echo"<button ><a href='car_booking_system.html'>Rent</a></button>";
       echo"</div>";
       

}
    ?>
    </div>
   
    
</body>
</html>