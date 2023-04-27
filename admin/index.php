<?php include 'include/session.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width" />
<meta name="author" content="">
<title>Dashboard</title>		
<script src="js/jquery-3.2.1.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>﻿
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../font-awesome-5.3.1/css/all.css">
<link rel="icon" href="../img/logo/logo.png" type="image/png">
</head>
<body>
<div class="wrapper">
	<?php include 'include/sidebar.php'; ?>
<!-- Page Content Holder -->
<div id="content">
	<?php include 'include/mainbar.php'; ?>
    <div class="container-fluid">				
        <div class="content-box"> <!-- Page Contents -->
<?php
    require_once("include/connection.php");
    $sql= " SELECT count(prod_ID) AS total FROM tbl_products";
    $result = mysqli_query($conn, $sql);
    $values = mysqli_fetch_assoc($result);
    $totalPosts = $values['total'];
?>
<?php
    require_once("include/connection.php");
    $sql= " SELECT count(order_ID) AS total FROM tbl_orders WHERE order_status='1'";
    $result = mysqli_query($conn, $sql);
    $values = mysqli_fetch_assoc($result);
    $newOrders = $values['total'];
?>
<?php
    require_once("include/connection.php");
    $sql= " SELECT count(order_ID) AS total FROM tbl_orders WHERE order_status='2'";
    $result = mysqli_query($conn, $sql);
    $values = mysqli_fetch_assoc($result);
    $shippedOrders = $values['total'];
?>
<?php
    require_once("include/connection.php");
    $sql= " SELECT count(order_ID) AS total FROM tbl_orders WHERE order_status='3'";
    $result = mysqli_query($conn, $sql);
    $values = mysqli_fetch_assoc($result);
    $deliveredOrders = $values['total'];
?>
<?php
    require_once("include/connection.php");
    $sql= " SELECT count(id) AS total FROM tbl_customers";
    $result = mysqli_query($conn, $sql);
    $values = mysqli_fetch_assoc($result);
    $totalUsers = $values['total'];
?>
<?php 
	if ($user_permissions == 4) {
		echo "Welcome!";
	}else{
?>		
        	<div class="row">
				<div class="col-md-4 col-sm-6">
	        		<div class="widgets">
	               		<div class="row">
	               			<div class="col-md-4 col-xs-4">
	               				<center>
	               					<span style="padding-top: 20px;" class="widgets-span-danger fas fa-cart-arrow-down fa-3x "></span>				
	               				</center>
	               			</div> 
	               			<div class="col-md-8 col-xs-8">
	               				<h3 style="color: #73879c; padding-bottom: 5px;"> <span style="font-weight: 700; font-size: 42px;"><?php echo $newOrders; ?> </span>New Orders</h3>			
	               			</div>
	               		</div>
	               	</div><br>
				</div>	
				<div class="col-md-4 col-sm-12">
	        		<div class="widgets">
	               		<div class="row">
	               			<div class="col-md-4 col-xs-4">
	               				<center>
									
	               					<span style="padding-top: 20px;" class="widgets-span-danger fas fa-shipping-fast fa-3x "></span>				
	               				</center>
	               			</div>
	               			<div class="col-md-8 col-xs-8">
	               				<h3 style="color: #73879c; padding-bottom: 5px;"> <span style="font-weight: 700; font-size: 42px;"><?php echo $shippedOrders; ?></span> Shipped</h3>			
	               			</div>
	               		</div>
	               	</div><br>
				</div>
				<div class="col-md-4 col-sm-12">
	        		<div class="widgets">
	               		<div class="row">
	               			<div class="col-md-4 col-xs-4">
	               				<center>
	               					<span style="padding-top: 20px;" class="widgets-span-danger fas fa-clipboard-check fa-3x "></span>				
	               				</center>
	               			</div>
	               			<div class="col-md-8 col-xs-8">
	               				<h3 style="color: #73879c; padding-bottom: 5px;"> <span style="font-weight: 700; font-size: 42px;"><?php echo $deliveredOrders; ?></span> Delivered</h3>			
	               			</div>
	               		</div>
	               	</div><br>
				</div>
				
	        	<div class="col-md-6 col-sm-6">
	        		<div class="widgets">
	               		<div class="row">
	               			<div class="col-md-4 col-xs-4">
	               				<center>
	               					<span style="padding-top: 20px;" class="widgets-span-danger fas fa-layer-group fa-3x "></span>				
	               				</center>
	               			</div>
	               			<div class="col-md-8 col-xs-8">
	               				<h3 style="color: #73879c; padding-bottom: 5px;"> <span style="font-weight: 700; font-size: 42px;"><?php echo $totalPosts; ?></span> Products</h3>			
	               			</div>
	               		</div>
	               	</div><br>
				</div>
				<div class="col-md-6 col-sm-12">
	        		<div class="widgets">
	               		<div class="row">
	               			<div class="col-md-4 col-xs-4">
	               				<center>
	               					<span style="padding-top: 20px;" class="widgets-span-danger fas fa-user-friends fa-3x "></span>				
	               				</center>
	               			</div>
	               			<div class="col-md-8 col-xs-8">
	               				<h3 style="color: #73879c; padding-bottom: 5px;"> <span style="font-weight: 700; font-size: 42px;"><?php echo $totalUsers; ?></span> Customers</h3>			
	               			</div>
	               		</div>
	               	</div><br>
				</div>
				
			</div>
		</div>
		<br>
<?php
	}
 ?>
		

		</div><!-- /Page Contents -->
	</div>
</div>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>