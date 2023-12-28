<?php
    
    $con=mysqli_connect("localhost", "root", "", "car_dealership");
    $car_id = mysqli_real_escape_string($con, $_POST['car_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $available = mysqli_real_escape_string($con, $_POST['available']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $exterior_color = mysqli_real_escape_string($con, $_POST['exterior_color']);
    $interior_color = mysqli_real_escape_string($con, $_POST['interior_color']);
    $drivetrain = mysqli_real_escape_string($con, $_POST['drivetrain']);
    $mpg = mysqli_real_escape_string($con, $_POST['mpg']);
    $transmission = mysqli_real_escape_string($con, $_POST['transmission']);
    $engine = mysqli_real_escape_string($con, $_POST['engine']);
    $vin = mysqli_real_escape_string($con, $_POST['vin']);
    $stock = mysqli_real_escape_string($con, $_POST['stock']);
    $milage = mysqli_real_escape_string($con, $_POST['milage']);
    $entertainment = mysqli_real_escape_string($con, $_POST['entertainment']);
    $safety = mysqli_real_escape_string($con, $_POST['safety']);
    $seating = mysqli_real_escape_string($con, $_POST['seating']);
    $rating = mysqli_real_escape_string($con, $_POST['rating']);
    $image = mysqli_real_escape_string($con, $_POST['image']);
    $paypal_id = mysqli_real_escape_string($con, $_POST['paypal_id']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
	
    if(mysqli_connect_error()){
		echo "Connection Error!";
	} else {
		echo "Successful";

    }

    
    $insert = "INSERT INTO car_info
                    VALUES($car_id, '$name', '$available', $price, 
                    '$exterior_color', '$interior_color', '$drivetrain', 
                    '$mpg', '$transmission', '$engine', 
                    '$vin', '$stock', '$milage', 
                    '$entertainment', '$safety', '$seating', $rating, 
                    '$image', '$paypal_id', '$description')";
    echo "<br>";
    if (mysqli_query($con, $insert)){
        echo "Operation Done!";
        }

?>