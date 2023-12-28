<?php 
    //Insert data
    
    $con = mysqli_connect("localhost", "root", "", "car_dealership");

    $li_no = mysqli_real_escape_string($con, $_POST['li_no']);
    $start_date = mysqli_real_escape_string($con, $_POST['start_date']);
    $end_date = mysqli_real_escape_string($con, $_POST['end_date']);
    $payment_id = mysqli_real_escape_string($con, $_POST['payment_id']);
    $user_id=mysqli_real_escape_string($con,$_POST['user_id']);



    
    $insert = "INSERT INTO hire_details(li_no, start_date, end_date, payment_id, user_id)
                VALUES('$li_no','start_date', '$end_date', '$payment_id',$user_id)";


    $result = mysqli_query($con, $insert);

    if($result){
        echo "Booking Successful";
    }

?>