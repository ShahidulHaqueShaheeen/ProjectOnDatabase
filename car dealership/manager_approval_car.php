<?php 
    //Insert data
    
    $con = mysqli_connect("localhost", "root", "", "car_dealership");

    $book_id = mysqli_real_escape_string($con, $_POST['book_id']);
    $approval = mysqli_real_escape_string($con, $_POST['approval']);

    
    $update = "UPDATE booking_details
                SET  approval= '$approval' 
                WHERE book_id=$book_id;";
    if ($approval == 'NO'){
        $delete= "DELETE FROM booking_details WHERE book_id = $book_id";
        $result = mysqli_query($con, $delete);
        if($result){
            echo "DELETION Successful";
        }
    } else {

        $update = "UPDATE booking_details
                SET  approval= '$approval' 
                WHERE book_id=$book_id;";

        $result = mysqli_query($con, $update);
        if($result){
            echo "UPDATE Successful";
        }
    }

    

    

?>