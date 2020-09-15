<?php 
	require_once("db.php");
	if (isset($_GET["name"])) {
		$name=mysqli_real_escape_string($conn,$_GET["name"]);
		$description=mysqli_real_escape_string($conn,$_GET["description"]);

		$sql="INSERT INTO `products`(`product_name`, `description`, `created_at`) VALUES ($name,$description";
		if ($conn->query($sql) === TRUE) {
			echo "success";
		}
		else{
			echo "error". $conn->error;
		}
	}
?>