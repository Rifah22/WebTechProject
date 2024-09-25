<?php
include '../control/process.php';
?>
 
<!DOCTYPE html>
<html>
<head>
  <title>Product Delivery</title>
</head>
<link rel="stylesheet" href="../css/style.css">
<body>
 
  <h1>Product Delivery Request Form</h1>
  <form action=""  method="post">
 
  <div>Customer Name:<br> <input type="text" class="cname" name="cus_name" id="cus_name">
   <?php echo "$customer_name"?>
</div>
  <div>Customer Address:<br> <textarea name="cus_address" id="cus_address" rows="2" cols="20"></textarea>
 <?php echo "$customer_address"?>
</div>
  <div>Customer Contact:<br> <input type="text" class="ccontact" name="contact" id="contact" step="1">
  <?php echo "$contact"?>
</div>
  <div>Order ID:<br> <input type="number" class="oid" name="id" id="id">
 <?php echo "$order_id"?>
</div>
  <div>Desired Delivery Date:<br> <input type="date" class="dddate" name="del_date" id="del_date">
 <?php echo "$delivery_date"?>
</div>
  <div>Delivery Time slot:<br> <select name="delivery_time_slot" id="time">
    <option value="Morning">Morning (9 AM - 12 PM)</option>
    <option value="Afternoon">Afternoon (12 PM - 3 PM)</option>
    <option value="Evening">Evening (3 PM - 6 PM)</option>
    </select></div><br><br>
 
  <input type="submit"   class="button submit" name="Submit" value="Submit Request">
 
  
<p id="emptyout"></p>
 
 <script src="../js/myscript.js"></script>


</form>
</body>
</html>