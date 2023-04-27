<?php

    require_once ("admin/include/connection.php");
    session_start();
    $username = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);	
    $sql = "SELECT * FROM `tbl_customers` WHERE `email`='".$username."' AND `password`='".$password."'";
    $result = mysqli_query($conn, $sql);	
    if(mysqli_num_rows($result) == 0){
        header("location: login.php?unknownUser");
    }else{	
        $_SESSION["username"] = $username;
        header("location: myCart.php");
    }

?>