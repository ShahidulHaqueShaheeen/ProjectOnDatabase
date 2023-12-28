<?php 
    //Insert data
    
    $con = mysqli_connect("localhost", "root", "", "car_dealership");

    $car_id = mysqli_real_escape_string($con, $_POST['car_id']);
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
    $payment_status = mysqli_real_escape_string($con, $_POST['payment_status']);
    $payment_id = mysqli_real_escape_string($con, $_POST['payment_id']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $duration = mysqli_real_escape_string($con, $_POST['duration']);

    
    $insert = "INSERT INTO booking_details(car_id, user_id, payment_status, payment_id, date, duration)
                VALUES($car_id, $user_id, '$payment_status', '$payment_id', '$date', $duration)";


    $result = mysqli_query($con, $insert);

    if($result){
        echo "Booking Successful";
    }

?>