<?php 
require("admin/include/connection.php");

$id = $_GET['id'];

$sql = "DELETE FROM tbl_orders WHERE order_ID='$id'";
$result = mysqli_query($conn, $sql);

if($result){
    header("location: myCart.php?msg=Record deleted");
}else{
    header("location: myCart.php?msg=Error");
}

?>