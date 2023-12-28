<?php 
    $con=mysqli_connect("localhost", "root", "", "car_dealership");
    $li_no = $_GET['li_no'];
    $query = "SELECT * FROM driver_info where li_no=".$li_no;

    $result = mysqli_query($con, $query);

    

?>


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
        
        echo"<div class='details'>";
            echo "<h1>".$row['name']."</h1>";
            echo "<h2>".$row['li_no']."</h2>";
            echo "<h1>".$row['experience']."</h1>";
            echo "<p>".$row['address']."</p>";
            echo "<h2>".$row['rating']."</h2>";
            echo "<h3>".$row['phone_number']."</h3>";
            echo "<h2>".$row['paypal_id']."</h2>";
            echo "<h2>".$row['rate_per_hour']."</h2>";
       echo" </div>";

       echo"<div class='description'>";

       echo"<button><a href='driver_booking_system.html'>Hire</a></button>";
       echo"</div>";

}
    ?>
    </div>
   
    
</body>
</html>