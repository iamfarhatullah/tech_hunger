<?php  
if (isset($_POST['submitPost'])) {
	require_once("include/connection.php");
	$name = $_POST['name'];
	$description = $_POST['description'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	$category = $_POST['category'];

	if (empty($_FILES['image']['name'])) {
		$imagepath;
	}else{
		$image = $_FILES['image']['name'];
		$target = "uploads/products/";
		$imagepath = $target.time()."-".rand(1000, 9999)."-".$image;	
	}

	$sql = "INSERT INTO `tbl_products`(`prod_name`, `prod_desc`, `prod_qty`, `prod_pic`, `prod_price`, `prod_category`) VALUES ('$name','$description','$quantity','$imagepath','$price','$category')";

	$result = mysqli_query($conn, $sql);
	if ($result) {
		if (!empty($_FILES['image']['name'])) {
			move_uploaded_file($_FILES['image']['tmp_name'], $imagepath);
		}
		header("Location: products.php?created");
	}else{
		header("Location: products.php?error");
	}
}elseif (isset($_POST['updatePost'])) {
	require_once("include/connection.php");
	$id = $_POST['productId'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	$image = $_FILES['image']['name'];
	$target = "uploads/products/";
	$imagepath = $target.time()."-".rand(1000, 9999)."-".$image;
	$category = $_POST['category'];
	$storedImage = $_POST['storedImage'];
    $image;
    $finalImage;
    $newFile = 0;

    if (empty($_FILES['image']['name'])) {
        $finalImage = $storedImage;
    } else {
        $image = $_FILES['image']['name'];
        $image = str_replace(' ', '-', $image);
        $target = "uploads/products/";
        $imageNewPath = $target.time()."-".$image;    
        $finalImage = $imageNewPath;
        $newFile = 1;
    }

	$sql = "UPDATE `tbl_products` SET `prod_name`='".$name."', `prod_desc`='".$description."', `prod_qty`='".$quantity."', `prod_pic`='".$finalImage."', `prod_price`='".$price."', `prod_category`='".$category."' WHERE  prod_ID='".$id."'";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		if ($newFile) {
            move_uploaded_file($_FILES['image']['tmp_name'], $imageNewPath);
            if (!empty($storedImage)) {
            	unlink($storedImage);
            }
        }
		header("Location: products.php?updated");
	}else{
		header("Location: products.php?notUpdated");
	}
}
?>