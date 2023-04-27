<?php 
	session_start();
	if (!isset($_SESSION["username"])) {
		header("location: login.php");
	}
	require_once("admin/include/connection.php");
	$status = 0;
	$sessionUsername = $_SESSION["username"];
	$sql = "SELECT * FROM tbl_customers WHERE email='$sessionUsername'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		$user_ID = $row['id'];
		$name = $row['name'];
		$email = $row['email'];
		$address = $row['address'];
		$phone = $row['phone'];

	}else{
		header("location: login.php");
	}
?>