<html>
<head>
<link rel="stylesheet" href="../css/style.css">

</head>
<body>
<?php
include '../model/mydb.php';
$id=$_GET['id'];
$mydb = new mydb();
        $conobj = $mydb->createConObject();
        $data = $mydb->updateProduct($conobj, "mytable",$id,"Delivered","Paid");
        $data= $mydb->showProduct($conobj,"mytable");
    echo "<h3>Completed Deliveries</h3>";
    echo "<table>";
    echo "<thead>";
    echo  "<tr>";
    echo "<th>Order ID</th>";
    echo "<th>Customer Name</th>";
    echo "<th>Date Delivered</th>";
    echo "<th>Payment Status</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
        
        if ($data->num_rows > 0) {
            // Output data of each row
            foreach($data as $row) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["cus_name"] . "</td>";
                echo "<td>" . $row["del_date"] . "</td>";
                echo "<td>" . $row["payment_status"] . "</td>";
                
                echo "</tr>";
            }
        } else {
            echo "<tr><td>No products found</td></tr>";
        }
        

    echo "</tbody>";
echo "</table>";


$data= $mydb->showProduct($conobj,"mytable");
    echo "<h3>Payment History</h3>";
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Order ID</th>";
    echo "<th>Amount</th>";
    echo "<th>Date Paid</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
        
        if ($data->num_rows > 0) {
            // Output data of each row
            foreach($data as $row) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["amount"] . "</td>";
                echo "<td>" . $row["del_date"] . "</td>";
                
                echo "</tr>";
            }
        } else {
            echo "<tr><td>No products found</td></tr>";
        }
        

    echo "</tbody>";
echo "</table>";

$mydb->closecon($conobj);
?>
</body>
</html>