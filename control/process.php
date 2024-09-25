<?php
include '../model/mydb.php';
$customer_name="";
$customer_address="";
$contact="";
$hasError="";   
$order_id="";
$delivery_date="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
/*
    if(isset($_REQUEST["submit"]))
{
    include '../control/updatestatus.php';
}
    */
if(empty($_REQUEST['cus_name'])){
    $customer_name="**Customer name must not be empty";
    $hasError=1;
}
else{
    $customer_name="Your Customer name is ".$_REQUEST["cus_name"]."<br>";
}

if(empty($_REQUEST['cus_address'])){
    $customer_address="**Customer address must not be empty";
}
else{
    $customer_address="Your Customer Address is ".$_REQUEST["cus_address"]."<br>";
}

if (empty($_POST["contact"])) {
    $contact= "**Phone number must not be empty";
    $hasError=1;
} elseif ($_POST["contact"][0] !== '0') {
    $contact= "Phone number must start with '0'";
    $hasError=1;
}
/*else {
    $phonenumber= $_REQUEST["phn_number"];
    $hasError=1;
}*/
else{
    $contact="Your phonenumber is " . $_REQUEST["contact"];
}
if(empty($_REQUEST['id'])){
    $order_id="**Order_id must not be empty";
}
else{
    $order_id="Your Order id is ".$_REQUEST["id"]."<br>";
}

if(empty($_REQUEST['del_date'])){
    $delivery_date="**Delivery date must not be empty";
}
else{
    $delivery_date="Your Delivery Date is ".$_REQUEST["del_date"]."<br>";
}

if($hasError==1)
{
    echo  "**please fill up the required data **";
}
else{
    $mydb= new mydb();
    $conobj= $mydb->createConObject();
    $insert=$mydb->createproduct($conobj, "mytable",$_REQUEST["cus_name"], $_REQUEST["cus_address"],
    $_REQUEST["contact"], $_REQUEST["id"], $_REQUEST["del_date"]);
if( $insert)
{
    echo "Customer Information is created";
}
else{
echo "Customer Information is not created".$insert;
}
$mydb->closeCon($conobj);


}

}
?>