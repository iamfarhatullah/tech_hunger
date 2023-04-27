<?php 

include("include/connection.php");

$order_ID = $_GET['id'];

$sql = "UPDATE `tbl_orders` SET `order_status`='2' WHERE order_ID='".$order_ID."'";

$result = mysqli_query($conn, $sql);

if($result){
    header("location: viewOrder.php?msg=Order Shipped");
}else{
    header("location: viewOrder.php?msg=Error");
}


?>