<?php 
    //Insert data
    
    $con = mysqli_connect("localhost", "root", "", "car_dealership");

    $product_id = mysqli_real_escape_string($con, $_POST['product_id']);
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
    $payment_id = mysqli_real_escape_string($con, $_POST['payment_id']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
   

    
    $insert = "INSERT INTO book_accessiories(product_id, user_id, payment_id, date)
                VALUES($product_id, $user_id, '$payment_id', '$date')";


    $result = mysqli_query($con, $insert);

    if($result){
        echo "Booking Successful";
    }

?>