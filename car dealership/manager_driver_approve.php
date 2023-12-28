


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
    <form action="manager_approval_driver.php" method="POST">
       <input type="number" name="book_id" placeholder="book_id">
      
       <input type="text" name="approval" placeholder="CONFIRMATION: YES/NO">
      
       <button type="submit">APPROVE</button>
    </form>

</body>
</html>





<?php 

    $con = mysqli_connect("localhost", "root", "", "car_dealership");

    $query = "SELECT * FROM hire_details";
    $result = mysqli_query($con, $query);
    $row_number = mysqli_num_rows($result);

    if ($row_number > 0) {
        //li_no | start_date | end_date   | payment_id | user_id | approval | book_id
        echo "<TABLE>
        <tr>
        <td>li_no</td>
        <td>start date </td>
        <td>end date</td>
        <td>payment id</td>
        <td>user id</td>
        
        <td>approval</td>
        <td>book id</td>
      
        </tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>
                <td>".$row['li_no']."</td>
                <td>".$row['start_date']."</td>
                <td>".$row['end_date']."</td>
                <td>".$row['payment_id']."</td>;
                <td>".$row['user_id']."</td>
                <td>".$row['approval']."</td>
                <td>".$row['book_id']."</td>";
               
                    

        }
    } else{
         echo "</TABLE>";
    }


?>