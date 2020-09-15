<?php 
require_once("db.php");
if (isset($_POST['name'],$_POST["description"])) {
	$name=mysqli_real_escape_string($conn,$_POST["name"]);
	$description=mysqli_real_escape_string($conn,$_POST["description"]);
	$sql="SELECT * FROM `products` WHERE `product_name`='$name' AND `description`='$description'";
	$result=$conn->query($sql);
	if ($result->num_rows>0) {
		echo "მოვალ და ევიყვან";
	}
}