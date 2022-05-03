<?php
	$product_id = $_GET['id'];
	include("config.php");
	if($_FILES['image']['name'] != ''){
		$name = $_FILES['image']['name'];
		$type = $_FILES['image']['type'];
		$tmp_name = $_FILES['image']['tmp_name'];
		$error = $_FILES['image']['error'];
		$size = $_FILES['image']['size'];

		$destinationPath = 'images/upload/'.$name;
		if(move_uploaded_file($tmp_name, $destinationPath)){
			$image = $destinationPath;
		}else{
			echo "File not uploaded " . $error;
		};
	}else{
		$image = $_POST['existing_image'];
	}

	$name = $_POST['name'];
	$category_id = $_POST['category_id'];
	$subcategory_id = $_POST['subcategory_id'];
	$price = $_POST['price'];

	$sql = "UPDATE product SET  name = '{$name}', image = '{$image}', subcategory_id = '{$subcategory_id}',category_id = '{$category_id}', price = '{$price}' WHERE id = '{$product_id}'";

	$result = mysqli_query($con,$sql);
	if($result){
		header('location:product.php');
	}else{
		echo "Some errors occurred while uploading..";
	}
?>