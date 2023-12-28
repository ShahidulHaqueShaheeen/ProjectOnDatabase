





<?php
    
    $con=mysqli_connect("localhost", "root", "", "car_dealership");
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $product_id = mysqli_real_escape_string($con, $_POST['product_id']);
    $special_feature = mysqli_real_escape_string($con, $_POST['special_feature']);
    $size = mysqli_real_escape_string($con, $_POST['size']);
    $brand = mysqli_real_escape_string($con, $_POST['brand']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $image = mysqli_real_escape_string($con, $_POST['image']);
    $paypal_id = mysqli_real_escape_string($con, $_POST['paypal_id']);
    


    if(mysqli_connect_error()){
		echo "Connection Error!";
	} else {
		echo "Successful";

    }

    
    $insert = "INSERT INTO accessiories
                    VALUES('$name', $product_id, 
                    '$special_feature', '$size', '$brand', 
                    $price, '$image', '$paypal_id')";
    echo "<br>";
    if (mysqli_query($con, $insert)){
        echo "Operation Done!";
        }

?>