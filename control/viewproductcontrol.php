<html>
<head>
    <title>Search Delivery Details</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <h2>Delivery Man Dashboard</h2>
    <?php
    include '../model/mydb.php';

    if(isset($_POST['search'])){
        $orderid = $_POST['orderid'];
        $mydb = new mydb();
        $conobj = $mydb->createConObject();
        $data = $mydb->showProductById($conobj, "mytable", $orderid);
        if($data->num_rows > 0){
            echo "<h3>Pending Deliveries</h3>";
            echo "<table>";
            echo "<tr>";
            echo "<th>Order ID</th>";
            echo "<th>Customer Name</th>";
            echo "<th>Address</th>";
            echo "<th>Status</th>";
            echo "<th>Actions</th>";
            echo "</tr>";
            foreach($data as $row){
                
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["cus_name"]."</td>";
                echo "<td>".$row["cus_address"]."</td>";
                echo "<td>".$row["status"]."</td>";
                echo "<td>
                       <a href='../control/updatestatus.php?id=" . $row["id"] . "' class='submit'>Start Delivery</a>";
                echo "</td>";
                echo "</tr>";
                echo "</table>";
            }
        } else {
            echo "No data found";
        }

    }
    ?>

</body>
</html>
