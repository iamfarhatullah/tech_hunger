<?php include 'include/session.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width" />
<meta name="author" content="">
<title>Create Product</title>		
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
		$id = $_GET['id'];
		require_once("include/connection.php");
		$sql = "SELECT * FROM tbl_products WHERE prod_ID='$id'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result)>0) {
			$row = mysqli_fetch_assoc($result);
			$id = $row['prod_ID'];
			$name = $row['prod_name'];
			$description = $row['prod_desc'];
			$quantity = $row['prod_qty'];
			$pic = $row['prod_pic'];
			$price = $row['prod_price'];
			$category = $row['prod_category'];
			$actionBtn = 'updatePost';
			$statusText = 'Update';
		}else{
			header("Location: products.php");
		}

	}else{
		$id = null;
		$name = '';
		$description = '';
		$quantity = 0;
		$pic = '';
		$price = 0;
		$category = 0;
		$actionBtn = 'submitPost';
		$statusText = 'Add';

	}
	?>
    <div class="container-fluid">				
        <div class="content-box"> <!-- Page Contents -->
			<div class="row">
				<div class="col-md-12">
					<div class="form-wrapper">
						<h3 class="form-title"><?php echo $statusText; ?> Product</h3>
						<form action="submitProduct.php" method="post" enctype="multipart/form-data"><br>
							<div class="row">
								<div class="col-md-2 col-sm-3">
									<label class="pull-right">Product Name *</label>		
								</div>
								<div class="col-md-6 col-sm-9">
									<input type="text" name="name" value="<?php echo $name; ?>" class="form-field" placeholder="Name" required>		
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-2 col-sm-3">
									<label class="pull-right">Product Description *</label>		
								</div>
								<div class="col-md-6 col-sm-9">
									<textarea class="textarea-field" name="description" rows="5" placeholder="Write details" required><?php echo $description; ?></textarea>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-2 col-sm-3">
									<label class="pull-right">Product Category *</label>		
								</div>
								<div class="col-md-6 col-sm-9">
									<select name="category" class="form-field" required>
									<option value="">Select Category</option>
										<?php 
										include("include/connection.php");
										$sql = "SELECT * FROM tbl_categories";
										$result = mysqli_query($conn, $sql);
										if(mysqli_num_rows($result)>0){
											while($row = mysqli_fetch_assoc($result)){
												$cat_ID = $row['cat_ID'];
												$cat_name = $row['cat_name'];
												if($category == $cat_ID){
													$selected = "selected";
												}else{
													$selected = "";
												}
												echo "<option value='".$cat_ID."' ".$selected.">".$cat_name."</option>";
											}
										}
										?>
									</select>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-2 col-sm-3">
									<label class="pull-right">Product Image</label>		
								</div>
								<div class="col-md-6 col-sm-9">
									<input type="hidden" name="storedImage" value="<?php echo $pic; ?>">
									<input type="file" name="image" class="form-field" accept="image/*">		
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-2 col-sm-3">
									<label class="pull-right">Product Qty *</label>		
								</div>
								<div class="col-md-6 col-sm-9">
									<input type="number" name="quantity" value="<?php echo $quantity; ?>" class="form-field" required>		
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-2 col-sm-3">
									<label class="pull-right">Product Price *</label>		
								</div>
								<div class="col-md-6 col-sm-9">
									<input type="number" name="price" value="<?php echo $price; ?>" class="form-field" required>		
								</div>
							</div>
							<br>							
							<hr>
							<div class="row">
								<input type="hidden" name="productId" value="<?php echo $id; ?>">
								<div class="col-md-offset-2 col-md-6 col-sm-offset-3">
									<input type="reset" class="primary-btn" value="Reset">
									<input type="submit" name="<?php echo $actionBtn; ?>" class="success-btn" value="Submit"><br><br>
								</div>
							</div>
						</form>	
					</div>
				</div>
			</div>

		</div><!-- /Page Contents -->
	</div>
</div>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>