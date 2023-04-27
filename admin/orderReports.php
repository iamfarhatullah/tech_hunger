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
							
							<div class="form-wrapper">
								<div class="row">
									<div class="col-md-6 col-sm-8 col-xs-6">
										<h3 class="box-title">Weekly Reports</h3>
									</div>
									<div class="col-md-6 col-sm-4 col-xs-6">
										<div class="main-action-box">
										</div>
									</div>
								</div>
								<div class="hr"></div>
								<?php  
						require_once("include/connection.php");
						
						$sql = "SELECT * FROM `tbl_orders` 
                        INNER JOIN tbl_products ON tbl_products.prod_ID = tbl_orders.prod_FK 
						INNER JOIN tbl_customers ON tbl_customers.id = tbl_orders.user_FK
						WHERE order_status!='0' AND `order_datetime` > DATE_SUB(NOW(), INTERVAL 1 WEEK)";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result)>0) {
                            $sno = 1;
                            $grandTotal = 0;
                            echo '<div class="row">
                            <div class="col-md-12">
                              <table class="table table-bordered">
                                <tr>
                                    <th style="width: 30px">S.No</th>
                                    <th style="width: 80px">Picture</th>
                                    <th>Name</th>
                                    <th style="width: 150px">Date</th>
                                    <th style="width: 30px">QTY</th>
                                    <th style="width: 100px">Price</th>
                                    <th style="width: 120px">Total</th>
                                </tr>';
							while ($row = mysqli_fetch_assoc($result)) {
								$id = $row['order_ID'];
								$title = $row['prod_name'];
                                $prod_pic = $row['prod_pic'];
								$date = $row['order_datetime'];
                                $prod_price = $row['prod_price'];
                                $order_qty = $row['order_qty'];
								$mydate = date("d-M-Y", strtotime($date));
								$dayMonth = date("d M", strtotime($date));
								$year = date("Y", strtotime($date));
								$custName = $row['name'];
								$order_status = $row['order_status'];
								$total = $order_qty * $prod_price;
								echo '<tr>
                                    <td>'.$sno.'</td>
                                    <td><img src="'.$prod_pic.'" style="width: 50px; height: 50px;"></td>
                                    <td>'.$title.'</td>
                                    <td>'.$mydate.'</td>
                                    <td>'.$order_qty.'</td>
                                    <td>'.$prod_price.'</td>
                                    <td>'.$total.'</td>
                                    
                                </tr>';
                                $grandTotal = $grandTotal + $total;
								$sno++;
							}
                            echo '<tr>';
                            echo '<td></td>';
                            echo '<td></td>';
                            echo '<td></td>';
                            echo '<td></td>';
                            echo '<td></td>';
                            echo '<td></td>';
                            echo '<td><b>'.$grandTotal.'</b></td>';
                            echo '</tr>';
							echo '</table>
                            </div>
                        </div>';
						}else{
							echo "<br>";
							echo "<i>No Data</i>";
						}
						?>
							</div>
						</div>
					</div>

<br>

                    <div class="row">
						<div class="col-md-12">
							
							<div class="form-wrapper">
								<div class="row">
									<div class="col-md-6 col-sm-8 col-xs-6">
										<h3 class="box-title">Monthly Reports</h3>
									</div>
									<div class="col-md-6 col-sm-4 col-xs-6">
										<div class="main-action-box">
										</div>
									</div>
								</div>
								<div class="hr"></div>
								<?php  
						require_once("include/connection.php");
						
						$sql = "SELECT * FROM `tbl_orders` 
                        INNER JOIN tbl_products ON tbl_products.prod_ID = tbl_orders.prod_FK 
						INNER JOIN tbl_customers ON tbl_customers.id = tbl_orders.user_FK
						WHERE order_status!='0' AND `order_datetime` > DATE_SUB(NOW(), INTERVAL 1 MONTH)";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result)>0) {
                            $sno = 1;
                            $grandTotal = 0;
                            echo '<div class="row">
                            <div class="col-md-12">
                              <table class="table table-bordered">
                                <tr>
                                    <th style="width: 30px">S.No</th>
                                    <th style="width: 80px">Picture</th>
                                    <th>Name</th>
                                    <th style="width: 150px">Date</th>
                                    <th style="width: 30px">QTY</th>
                                    <th style="width: 100px">Price</th>
                                    <th style="width: 120px">Total</th>
                                </tr>';
							while ($row = mysqli_fetch_assoc($result)) {
								$id = $row['order_ID'];
								$title = $row['prod_name'];
                                $prod_pic = $row['prod_pic'];
								$date = $row['order_datetime'];
                                $prod_price = $row['prod_price'];
                                $order_qty = $row['order_qty'];
								$mydate = date("d-M-Y", strtotime($date));
								$dayMonth = date("d M", strtotime($date));
								$year = date("Y", strtotime($date));
								$custName = $row['name'];
								$order_status = $row['order_status'];
								$total = $order_qty * $prod_price;
								echo '<tr>
                                    <td>'.$sno.'</td>
                                    <td><img src="'.$prod_pic.'" style="width: 50px; height: 50px;"></td>
                                    <td>'.$title.'</td>
                                    <td>'.$mydate.'</td>
                                    <td>'.$order_qty.'</td>
                                    <td>'.$prod_price.'</td>
                                    <td>'.$total.'</td>
                                    
                                </tr>';
                                $grandTotal = $grandTotal + $total;
								$sno++;
							}
                            echo '<tr>';
                            echo '<td></td>';
                            echo '<td></td>';
                            echo '<td></td>';
                            echo '<td></td>';
                            echo '<td></td>';
                            echo '<td></td>';
                            echo '<td><b>'.$grandTotal.'</b></td>';
                            echo '</tr>';
							echo '</table>
                            </div>
                        </div>';
						}else{
							echo "<br>";
							echo "<i>No Data</i>";
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