<?php


    $showAlert=false;

  
    
    $con=mysqli_connect("localhost", "root", "", "car_dealership");
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $search = "SELECT * FROM customers WHERE name='$name' AND password='$password'";
    $result = mysqli_query($con, $search);
    $row_number = mysqli_num_rows($result);
    $a = mysqli_fetch_assoc($result);
    print_r($a);
    echo $row_number;
    if ($row_number > 0) {
      
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['name'] = $name;
        header("location: products.php");
    
    }
     else {

        header("location: login.html");
  
    }

   
  
?>