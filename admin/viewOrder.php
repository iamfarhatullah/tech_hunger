<?php include 'include/session.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width" />
<meta name="author" content="">
<title>Order</title>		
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
	<?php 
		
		if (isset($_GET['id'])) {
			require_once("include/connection.php");
			$id = $_GET['id'];
			$sql = "SELECT * FROM tbl_orders 
			INNER JOIN tbl_products ON tbl_products.prod_ID = tbl_orders.prod_FK 
			INNER JOIN tbl_customers ON tbl_customers.id = tbl_orders.user_FK
			WHERE order_ID='$id'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result)>0) {
				$id;
				
				while ($row = mysqli_fetch_assoc($result)) {
					$id = $row['order_ID'];
					$title = $row['prod_name'];
					$details = $row['prod_desc'];
					$qty = $row['order_qty'];
					$order_status = $row['order_status'];
					$address = $row['address'];
					$date = $row['order_datetime'];
					$phone = $row['phone'];
					$image = $row['prod_pic'];
					if (empty($image)) {
						$image = 'images/default.jpg';
					}
					$mydate = date("d-M-Y", strtotime($date));
					$custName = $row['name'];
					
					if ($order_status == 1){
						$btnAndStatus = '<a href="confirmOrder.php?id='.$id.'" class="btn btn-sm btn-primary">Deliver Now</a>';
					}elseif($order_status == 2){
						$btnAndStatus = '<h4 style="color: blue;">Shipped</h4>';
					}else{
						$btnAndStatus = '<h4 style="color: green;">Delivered Successfully</h4>';
					}
					
				}
			}else{
				header("Location: orders.php");
			}
		}elseif (!isset($_GET['id'])) {
			header("Location: orders.php");
		}	
	 ?>
    <div class="container-fluid">				
        <div class="content-box"> <!-- Page Contents -->
			<div class="row">
				<div class="col-md-12">
					<div class="form-wrapper">
						<div class="row">
							<div class="col-md-6 col-sm-8 col-xs-6">
								<h3 class="box-title">Order Details</h3>	
							</div>
							<div class="col-md-6 col-sm-4 col-xs-6">
								<div class="main-action-box">
									
								</div>
							</div>
						</div>
						<div class="hr"></div>
						<div class="pd-wrapper">
							<div class="row">
								<div class="col-md-4">
									<img src="<?php echo $image; ?>" class="img-responsive">
								</div>
								<div class="col-md-8">
									<h3 class="pd-title"><?php echo $title; ?></h3>
									<span class="pd-date"><?php echo $mydate; ?></span>
									
									<p class="pd-description"><?php echo $details; ?></p><br>
									<p>Ordered By:</p>
									<p><?php echo $custName."<br>".$phone."<br>".$address; ?></p><br>
									<?php echo $btnAndStatus; ?>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div><!-- /Page Contents -->
	</div>
</div>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>