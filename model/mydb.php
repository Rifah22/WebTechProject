<?php


class mydb{
public  $DBHostName="";
public $DBUserName="";
public $DBPassword="";
public $DBName="";
function __construct(){
 $this->DBHostName="localhost";
 $this->DBUserName="root";
 $this->DBPassword="";
 $this->DBName="db";
}

function createConObject(){
    return new mysqli($this->DBHostName, $this->DBUserName, $this->DBPassword, 
    $this->DBName);
}

function createproduct($conn,$table,$cus_name, $cus_address, $contact,$id, $del_date ){
$qrystring="INSERT INTO $table (cus_name, cus_address, contact, id, del_date) 
VALUES ('$cus_name', '$cus_address', '$contact','$id', '$del_date')";
$result = $conn->query($qrystring);
if($result === false)
{
    return $conn->error;
}
else{
    return $result;
}
}
function showProductById($conn,$table,$id){
    $qrystring="SELECT * FROM $table WHERE id = '$id'";
    $result= $conn->query($qrystring);
    return $result;
}
function updateProduct($conn,$table,$id,$status,$payment)
    {
        $querystring="UPDATE $table SET status='$status' ,payment_status='$payment' Where id ='$id'";
        $result=$conn->query($querystring);
        return $result;
    }

    function showProduct($conn,$table){
        $qrystring="SELECT * FROM $table";
        $result= $conn->query($qrystring);
        return $result;
    }


function closeCon($conn)
{
 $conn->close();
}

}




?>