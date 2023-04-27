<?php  
	require_once("include/connection.php");
	$id = $_GET['id'];
	$sqlImage = "SELECT prod_pic FROM tbl_products WHERE prod_ID=$id";
	$resultImage = mysqli_query($conn, $sqlImage);
	if (mysqli_num_rows($resultImage)>0) {
		$isImageExist = true;
		$row = mysqli_fetch_assoc($resultImage);
		$fileName = $row['prod_pic'];
	}
	$sql = "DELETE FROM tbl_products WHERE prod_ID=$id";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		if ($isImageExist) {
			unlink($fileName);
		}
		header("location: products.php?deleted");
	}else{
		header("location: products.php?notDeleted");
	}
?>