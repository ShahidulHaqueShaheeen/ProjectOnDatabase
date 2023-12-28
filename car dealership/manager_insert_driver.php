<?php
    
    $con=mysqli_connect("localhost", "root", "", "car_dealership");
    $li_no = mysqli_real_escape_string($con, $_POST['li_no']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $experience = mysqli_real_escape_string($con, $_POST['experience']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $rating = mysqli_real_escape_string($con, $_POST['rating']);
    $available_status = mysqli_real_escape_string($con, $_POST['available_status']);
    $phone_number = mysqli_real_escape_string($con, $_POST['phone_number']);
    $paypal_id = mysqli_real_escape_string($con, $_POST['paypal_id']);
    $rate_per_hour = mysqli_real_escape_string($con, $_POST['rate_per_hour']);


    if(mysqli_connect_error()){
		echo "Connection Error!";
	} else {
		echo "Successful";

    }

    
    $insert = "INSERT INTO driver_info
                    VALUES('$name', '$li_no', 
                    '$experience', '$address', $rating, 
                    '$available_status', '$phone_number', '$paypal_id', 
                     $rate_per_hour)";
    echo "<br>";
    if (mysqli_query($con, $insert)){
        echo "Operation Done!";
        }

?>