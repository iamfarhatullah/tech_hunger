
<?php

require('admin/include/connection.php');
// $id = $_GET['id'];

if(isset($_GET['addToCart'])){

    $prod = $_GET['prod'];
    $user = $_GET['user'];
    $qty = $_GET['qty'];

    $datenow = date("Y-m-d H:i:s");

    $sql = "INSERT INTO `tbl_orders`(`order_datetime`, `order_qty`, `prod_FK`, `user_FK`, `order_status`) VALUES
    ('".$datenow."','".$qty."','".$prod."','".$user."','0')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("location: myCart.php?msg=Added to cart");
    }else{
        echo "Error";
    }

}elseif(isset($_GET['id'])){
    $id = $_GET['id'];
    $datenow = date("Y-m-d H:i:s");

    $sql = "UPDATE `tbl_orders` SET `order_status`='1', `order_datetime`='".$datenow."' WHERE `order_ID`='".$id."'";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("location: myCart.php?msg=Submited");
    }else{
        echo "Error";
    }

}elseif(isset($_POST['withoutLoginBtn'])){
    
    $prod_ID = $_POST['id'];
    $qty = $_POST['qty'];
    header("location: buyWithoutLogin.php?prod_ID=".$prod_ID."&qty=".$qty);

}elseif(isset($_POST['checkCust'])){
    $prod_ID = $_POST['id'];
    $qty = $_POST['qty'];

    session_start();
    if (!isset($_SESSION["username"])) {
        header("location: login.php?notset");
    }
    require_once("admin/include/connection.php");
    $status = 0;
    $sessionUsername = $_SESSION["username"];
    $sql = "SELECT * FROM tbl_customers WHERE email='$sessionUsername'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $user_ID = $row['id'];
        
        header("location: createOrder.php?addToCart=true&user=".$user_ID."&prod=".$prod_ID."&qty=".$qty);



    }else{
        header("location: login.php");
    }
}



?>