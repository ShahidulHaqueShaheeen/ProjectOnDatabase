<?php
  
  
    
    $con=mysqli_connect("localhost", "root", "", "car_dealership");
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $nid = mysqli_real_escape_string($con, $_POST['nid']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $house_no = mysqli_real_escape_string($con, $_POST['house_no']);
    $area_name = mysqli_real_escape_string($con, $_POST['area_name']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $gmail = mysqli_real_escape_string($con, $_POST['gmail']);
 

    if ($nid != NULL){
        $sql = "INSERT INTO customers(name, gender, nid, phone, house_no, area_name, city, password, gmail)
                VALUES('$name', '$gender', '$nid', '$phone', '$house_no', '$area_name', '$city', '$password', '$gmail')";

        $result = mysqli_query($con, $sql);
    }
    if($result){

       echo "SIGN UP DONE";

    } else {
        echo "error!";
    }

    
  
?>