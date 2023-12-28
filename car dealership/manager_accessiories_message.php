<?php 

    $con = mysqli_connect("localhost", "root", "", "car_dealership");

    $query = "SELECT * FROM book_accessiories";
    $result = mysqli_query($con, $query);
    $row_number = mysqli_num_rows($result);

    if ($row_number > 0) {
        //book_id | car_id | user_id | date       | duration | payment_status | approval | payment_id
        echo "<TABLE>
        <tr>
        <td>book_id</td>
        <td>product_id</td>
        <td>user_id</td>
        <td>payment_id</td>
        <td>date</td>
        
        

        </tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>
                <td>".$row['book_id']."</td>
                <td>".$row['product_id']."</td>
                <td>".$row['user_id']."</td>
                <td>".$row['payment_id']."</td>;
                <td>".$row['date']."</td></tr>";  
                    

        }
    } else{
         echo "</TABLE>";
    }


?>