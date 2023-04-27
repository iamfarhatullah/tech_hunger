<?php include 'include/session.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width" />
<meta name="author" content="">
<title>Products</title>		
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
	<<?php include 'include/mainbar.php'; ?>
    <div class="container-fluid">				
        <div class="content-box"> <!-- Page Contents -->
			<div class="row">
				<div class="col-md-12">
					<?php if (isset($_GET['updated'])) {
						echo "<div class='callout callout-primary'>";
						echo "<p>Product updated Successfully</p>";
						echo "<button class='close-callout' onclick='removeCallout(window.location.href);'><i class='fas fa-times'></i></button>";
						echo "</div>";
					}elseif (isset($_GET['notUpdated'])) {
						echo "<div class='callout callout-danger'>";
						echo "<p>Updated failed</p>";
						echo "<button class='close-callout' onclick='removeCallout(window.location.href);'><i class='fas fa-times'></i></button>";
						echo "</div>";
					}elseif (isset($_GET['error'])) {
						echo "<div class='callout callout-danger'>";
						echo "<p>Error occured</p>";
						echo "<button class='close-callout' onclick='removeCallout(window.location.href);'><i class='fas fa-times'></i></button>";
						echo "</div>";
					}elseif (isset($_GET['created'])) {
						echo "<div class='callout callout-success'>";
						echo "<p>Product created Successfully</p>";
						echo "<button class='close-callout' onclick='removeCallout(window.location.href);'><i class='fas fa-times'></i></button>";
						echo "</div>";
					}elseif (isset($_GET['deleted'])) {
						echo "<div class='callout callout-primary'>";
						echo "<p>Product deleted Successfully</p>";
						echo "<button class='close-callout' onclick='removeCallout(window.location.href);'><i class='fas fa-times'></i></button>";
						echo "</div>";
					} ?>
					<div class="form-wrapper">
						<div class="row">
							<div class="col-md-6 col-sm-8 col-xs-6">
								<h3 class="box-title">Products</h3>	
							</div>
							<div class="col-md-6 col-sm-4 col-xs-6">
								<div class="main-action-box">
									<a href="createProduct.php" class="sm-primary-btn">Create New</a>
								</div>
							</div>
						</div>
						<div class="hr"></div>
						<?php  
						require_once("include/connection.php");
						$results_per_page = 8; 
		                $query = "SELECT * FROM `tbl_products`";
		                $result = mysqli_query($conn, $query);
		                $number_of_result = mysqli_num_rows($result); 
		                $number_of_page = ceil($number_of_result / $results_per_page);  
		                if (!isset($_GET['page'])) {
		                    $page = 1;  
		                } else {  
		                    $page = $_GET['page'];  
		                }  
		                $page_first_result = ($page-1) * $results_per_page; 
						$sql = "SELECT * FROM tbl_products  ORDER by prod_ID desc";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result)>0) {
							while ($row = mysqli_fetch_assoc($result)) {
								$id = $row['prod_ID'];
								$name = $row['prod_name'];
								$description = $row['prod_desc'];
								$price = $row['prod_price'];
								$quantity = $row['prod_qty'];
								$pic = $row['prod_pic'];

								$quantityContents = '';
								if ($quantity>0){
									$quantityContents = '<p style="padding: 10px 10px 6px 10px; 
									font-size: 12px; 
									background-color: #EEE;
									border-radius: 5px;">'.$quantity.'<br>Qty</p>';
								}else{
									$quantityContents = '<p style="padding: 10px 10px 6px 10px; 
									font-size: 12px; 
									background-color: #EEE;
									color: red;
									border-radius: 5px;">Out of<br>Stock</p>';
								}
								
								echo '<a href="viewProduct.php?id='.$id.'" class="post-link">
										<div class="post-wrapper">
											<div class="row">
												<div class="col-md-1 col-sm-2 col-xs-3">
													<center>
														'.$quantityContents.'
													</center>
												</div>
												<div class="col-md-8 col-sm-7 col-xs-9">
													<h4 class="post-title">'.$name.'</h4>
													<p style="overflow: hidden;
													text-overflow: ellipsis;
													display: -webkit-box;
													-webkit-line-clamp: 2; /* number of lines to show */
															line-clamp: 2; 
													-webkit-box-orient: vertical;" class="post-date">'.$description.'</p>
												</div>
												<div class="col-md-3 col-sm-3 col-xs-12">
													<div class="pull-right action-box">
														<a href="createProduct.php?id='.$id.'" class="sm-primary-btn">Edit</a>
														<a href="removeProduct.php?id='.$id.'" class="sm-danger-btn"><i class="fa fa-trash"></i></a>
													</div>
												</div>
											</div>	
										</div>
									</a>';
							}
							echo '<div class="row">';
							echo '<div class="col-md-12">';
							echo '<ul class="pagination pagination-sm">';
							for($page = 1; $page<= $number_of_page; $page++) {  
                            	echo '<li><a href="products.php?page='.$page.'">'.$page.'</a></li>';
                        	} 
							echo '</ul>';
							echo '</div>';
							echo '</div>';
						}else{
							echo "<br>";
							echo "<i>No Products</i>";
						}

						?>
					</div>
				</div>
			</div>
		</div><!-- /Page Contents -->
	</div>
</div>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>