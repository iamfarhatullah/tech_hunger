<?php 

include("admin/include/connection.php");

if(isset($_POST['withoutLogin'])){    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $prod_ID = $_POST['prod_ID'];
    $qty = $_POST['qty'];
    $sql = "INSERT INTO `tbl_customers`(`name`, `email`, `password`, `address`, `phone`) VALUES 
    ('".$name."','".$email."',' ','".$address."','".$phone."')";
    $result = mysqli_query($conn, $sql);
    if($result){
        $sql = "SELECT MAX(id) AS lastEntry FROM tbl_customers";
        $rslt = mysqli_query($conn, $sql);
        $value = mysqli_fetch_assoc($rslt);
        $lastCustID = $value['lastEntry'];
        // echo $lastCustID." \ ".$prod_ID;
        $datenow = date("Y-m-d H:i:s");
        $sql = "INSERT INTO `tbl_orders`(`order_datetime`, `order_qty`, `prod_FK`, `user_FK`, `order_status`) VALUES
        ('".$datenow."','".$qty."','".$prod_ID."','".$lastCustID."','1')";
        $result = mysqli_query($conn, $sql);
        if($result){
            $sql = "SELECT MAX(order_ID) AS maxID FROM tbl_orders";
            $rslt = mysqli_query($conn, $sql);
            $value = mysqli_fetch_assoc($rslt);
            $maxOrderID = $value['maxID'];
            echo "Your Order is Placed Successfully<br>";
            echo "You can track your order on: ".$maxOrderID;
            echo "<br><a href='trackOrder.php'>Click here to track order</a>";
            // header("location: myCart.php?msg=Added to cart");
        }else{
            echo "Error";
        }
        // header("Location: login.php?msg=Registered Successfully");
    }else{
        header("Location: butWithoutLogin.php?msg=Error");
    }
}else{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sqlCheck = "SELECT * FROM `tbl_customers` WHERE `email`='$email'";
    $sqlCheckResult = mysqli_query($conn, $sqlCheck);

    if(mysqli_num_rows($sqlCheckResult) == 0){
        $sql = "INSERT INTO `tbl_customers`(`name`, `email`, `password`, `address`, `phone`) VALUES 
        ('".$name."','".$email."','".$password."','".$address."','".$phone."')";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: login.php?msg=Registered Successfully");
        }else{
            header("Location: register.php?msg=Error");
        }
    }else{
        header("Location: register.php?msg=Email Already Registered");
    }
}



?>