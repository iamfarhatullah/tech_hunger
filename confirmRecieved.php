<?php 

include("admin/include/connection.php");

$order_ID = $_GET['id'];

$sql = "UPDATE `tbl_orders` SET `order_status`='3' WHERE order_ID='".$order_ID."'";

$result = mysqli_query($conn, $sql);

if($result){
    header("location: myCart.php?msg=Order Confirmed");
}else{
    header("location: myCart.php?msg=Error");
}


?>