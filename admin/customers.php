<?php include 'include/session.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width" />
<meta name="author" content="">
<title>Users</title>		
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
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="form-wrapper">
						<div class="row">
							<div class="col-md-6 col-sm-8 col-xs-6">
								<h3 class="box-title">Customers</h3>	
							</div>
							<div class="col-md-6 col-sm-4 col-xs-6">
								<div class="main-action-box">
									<!-- <a href="createUser.php" class="sm-primary-btn">Create New</a> -->
								</div>
							</div>
						</div>
						<table class="table table-striped table-hover">
						<?php  
						require_once("include/connection.php");
						$sql = "SELECT * FROM tbl_customers";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result)>0) {
							$serialNo = 1;
							echo "<thead>";
							echo "<tr>";
							echo '<th scope="col"></th>
									<th scope="col">Picture</th>
									<th scope="col">Name</th>
									<th scope="col">Email</th>
									<th scope="col">Phone</th>
									<th scope="col">Address</th>';
							echo "</tr>";
							echo "</thead>";
							echo "<tbody>";
							while ($row = mysqli_fetch_assoc($result)) {
								echo "<tr>";
								echo "<td>".$serialNo."</td>";
								
        						echo '<td><img class="img-circle" width="30" height="30" src="images/user.jpg"></td>';
								echo '<td>'.$row['name'].'</td>';
								echo '<td>'.$row['email'].'</td>';
								echo '<td>'.$row['phone'].'</td>';
								echo '<td>'.$row['address'].'</td>';
								echo "</tr>";
								$serialNo++;
							}
							echo "</tbody>";
							echo "</table>";
						}else{
							echo "No Customer Available";
						}
						?>
						
					</div><br>
				</div>
			</div>

		</div><!-- /Page Contents -->
	</div>
</div>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>