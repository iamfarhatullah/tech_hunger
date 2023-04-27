<?php include 'include/session.php'; ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width" />
	<meta name="author" content="">
	<title>Orders</title>
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
				<div class="content-box">
					<!-- Page Contents -->
					<div class="row">
						<div class="col-md-12">
							<?php if (isset($_GET['updated'])) {
						echo "<div class='callout callout-primary'>";
						echo "<p>Blog updated Successfully</p>";
						echo "<button class='close-callout' onclick='removeCallout(window.location.href);'><i class='fas fa-times'></i></button>";
						echo "</div>";
					}elseif (isset($_GET['notUpdated'])) {
						echo "<div class='callout callout-danger'>";
						echo "<p>Update failed</p>";
						echo "<button class='close-callout' onclick='removeCallout(window.location.href);'><i class='fas fa-times'></i></button>";
						echo "</div>";
					}elseif (isset($_GET['error'])) {
						echo "<div class='callout callout-danger'>";
						echo "<p>Error occured</p>";
						echo "<button class='close-callout' onclick='removeCallout(window.location.href);'><i class='fas fa-times'></i></button>";
						echo "</div>";
					}elseif (isset($_GET['created'])) {
						echo "<div class='callout callout-success'>";
						echo "<p>Blog created Successfully</p>";
						echo "<button class='close-callout' onclick='removeCallout(window.location.href);'><i class='fas fa-times'></i></button>";
						echo "</div>";
					}elseif (isset($_GET['deleted'])) {
						echo "<div class='callout callout-primary'>";
						echo "<p>Blog deleted Successfully</p>";
						echo "<button class='close-callout' onclick='removeCallout(window.location.href);'><i class='fas fa-times'></i></button>";
						echo "</div>";
					} ?>
							<div class="form-wrapper">
								<div class="row">
									<div class="col-md-6 col-sm-8 col-xs-6">
										<h3 class="box-title">Orders</h3>
									</div>
									<div class="col-md-6 col-sm-4 col-xs-6">
										<div class="main-action-box">
											<a href="orderReports.php" class="sm-primary-btn">Reports (Monthly/Weekly)</a>
										</div>
									</div>
								</div>
								<div class="hr"></div>
								<?php  
						require_once("include/connection.php");
						$results_per_page = 8; 
		                $query = "SELECT * FROM `tbl_orders`";
		                $result = mysqli_query($conn, $query);
		                $number_of_result = mysqli_num_rows($result); 
		                $number_of_page = ceil($number_of_result / $results_per_page);  
		                if (!isset($_GET['page']) ) {  
		                    $page = 1;  
		                } else {  
		                    $page = $_GET['page'];  
		                }  
		                $page_first_result = ($page-1) * $results_per_page; 
		                
		                	$query = "SELECT * FROM tbl_orders 
						INNER JOIN tbl_products ON tbl_products.prod_ID = tbl_orders.prod_FK 
						INNER JOIN tbl_customers ON tbl_customers.id = tbl_orders.user_FK
						WHERE order_status!='0'
						ORDER by order_datetime desc LIMIT " . $page_first_result . ',' . $results_per_page;
		                
						$sql = $query;
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result)>0) {
							while ($row = mysqli_fetch_assoc($result)) {
								$id = $row['order_ID'];
								$title = $row['prod_name'];
								$date = $row['order_datetime'];
								$mydate = date("d-M-Y", strtotime($date));
								$dayMonth = date("d M", strtotime($date));
								$year = date("Y", strtotime($date));
								$custName = $row['name'];

								$order_status = $row['order_status'];
								$status_contents = '';
								if($order_status == 1){
									$status_contents = '<p style="color: red; padding-left: 10px; font-size: 13px;" class="sm-info-btn">Status: Pending</p>';
								}elseif($order_status == 2){
									$status_contents = '<p style="color: blue; padding-left: 10px; font-size: 13px;" class="sm-info-btn">Status: Shipped</p>';
								}elseif($order_status == 3){
									$status_contents = '<p style="color: green; padding-left: 10px; font-size: 13px;" class="sm-info-btn">Status: Delivered</p>';
								}
								
								echo '<a href="viewOrder.php?id='.$id.'" class="post-link">
										<div class="post-wrapper">
											<div class="row">
												<div class="col-md-1">
													<p style="padding: 10px 10px 6px 10px; 
													font-size: 12px; 
													background-color: #EEE;
													text-align: center;
													border-radius: 5px;">'.$dayMonth.'<br>'.$year.'</p>
												</div>
												<div class="col-md-8 col-sm-8">
													<h4 class="post-title">'.$title.'</h4>
													'.$status_contents.'
												</div>
												<div class="col-md-3 col-sm-4">
													<div class="pull-right action-box">
														
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
                            	echo '<li><a href="orders.php?page='.$page.'">'.$page.'</a></li>';
                        	} 
							echo '</ul>';
							echo '</div>';
							echo '</div>';
						}else{
							echo "<br>";
							echo "<i>No Orders</i>";
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