


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="manager_car_approve.css">
</head>
<body>
    <div class="heading">
     <h1>Approval</h1>
    </div>
    <form action="manager_approval_car.php" method="POST">
       <input type="number" name="book_id" placeholder="book_id">
      
       <input type="text" name="approval" placeholder="Payment status: YES/NO">
      
       <button type="submit">APPROVE</button>
    </form>

</body>
</html>





<?php 

    $con = mysqli_connect("localhost", "root", "", "car_dealership");

    $query = "SELECT * FROM booking_details";
    $result = mysqli_query($con, $query);
    $row_number = mysqli_num_rows($result);

    if ($row_number > 0) {
        //book_id | car_id | user_id | date       | duration | payment_status | approval | payment_id
        echo "<TABLE>
        <tr>
        <td>book_id</td>
        <td>car_id</td>
        <td>user_id</td>
        <td>date</td>
        <td>duration</td>
        
        <td>payment status</td>
        <td>approval</td>
        <td>payment_id</td>

        </tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>
                <td>".$row['book_id']."</td>
                <td>".$row['car_id']."</td>
                <td>".$row['user_id']."</td>
                <td>".$row['date']."</td>;
                <td>".$row['duration']."</td>
                <td>".$row['payment_status']."</td>
                <td>".$row['approval']."</td>
                <td>".$row['payment_id']."</td></tr>";  
                    

        }
    } else{
         echo "</TABLE>";
    }


?>