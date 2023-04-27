<?php include 'include/session.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width" />
<meta name="author" content="">
<title>Product</title>		
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
	require_once("include/connection.php");
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "SELECT * FROM tbl_products WHERE prod_ID='$id'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result)>0) {
			$row = mysqli_fetch_assoc($result);
			$name = $row['prod_name'];
			$desc = $row['prod_desc'];
			$qty = $row['prod_qty'];
			$image = $row['prod_pic'];
			$price = $row['prod_price'];
			if (empty($image)) {
				$image = 'images/default.jpg';
			}
			// $mydate = date("d-M-Y", strtotime($date));
			$quantityContents = '';
								if ($qty>0){
									$quantityContents = '<p style="padding: 10px 10px 6px 10px; 
									font-size: 14px;">Qty '.$qty.'</p>';
								}else{
									$quantityContents = '<p style="padding: 10px 10px 6px 10px; 
									font-size: 14px; 
									color: red;">Out of Stock</p>';
								}
		}else{
			header("Location: products.php");
		}
	}elseif (!isset($_GET['id'])) {
		header("Location: products.php");
	}				

	?>
    <div class="container-fluid">				
        <div class="content-box"> <!-- Page Contents -->
			<div class="row">
				<div class="col-md-12">
					<div class="form-wrapper">
						<div class="row">
							<div class="col-md-6 col-sm-8 col-xs-6">
								<h3 class="box-title">Product</h3>	
							</div>
							<div class="col-md-6 col-sm-4 col-xs-6">
								<div class="main-action-box">
									<a href="createProduct.php?id=<?php echo $id; ?>" class="sm-primary-btn">Edit</a>
									
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
									<h3 class="pd-title"><?php echo $name; ?></h3>
									<?php echo $quantityContents; ?>
									<p class="pd-description"><?php echo 'Price: '.$price.' PKR'; ?></p>
									<p class="pd-description"><?php echo $desc; ?></p>
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