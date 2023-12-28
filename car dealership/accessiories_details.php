<?php 
    $con=mysqli_connect("localhost", "root", "", "car_dealership");
    $product_id = $_GET['product_id'];
    $query = "SELECT * FROM accessiories where product_id=".$product_id;

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
        echo "<h2>Name:</h2>";echo "<h1>".$row['name']."</h1>";
        echo "<h2>Product ID:</h2>";echo "<h2>".$row['product_id']."</h2>";
        echo "<h2>Price:</h2>";echo "<h1>".$row['price']."</h1>";
        echo "<h2>Size:</h2>";echo "<h2>".$row['size']."</h2>";
        echo "<h2>Brand:</h2>";echo "<h3>".$row['brand']."</h3>";
        echo "<h2>Payment:</h2>";echo "<h2>".$row['paypal_id']."</h2>";
       echo" </div>";


       echo"<div class='description'>";
       echo"<h1>Description</h1>";
       echo "<h3>".$row['special_feature']."</h3>";
       echo"<button> <a href='book_accessories.html'>Buy</a></button>";
       echo"</div>";

}
    ?>
    </div>
   
    
</body>
</html>