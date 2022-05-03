<?php 
	include("config.php");
	if(isset($_FILES['image'])){
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
		// echo "<pre>";
		// print_r($_FILES);
	}else{
		$image = 'images/upload/dummy.png';
	}

	$name = $_POST['name'];
	$category_id = $_POST['category_id'];
	$subcategory_id = $_POST['subcategory_id'];
	$price = $_POST['price'];

	$sql = "INSERT INTO product (name, image,subcategory_id,category_id,price) VALUES ('{$name}', '{$image}', '{$subcategory_id}','{$category_id}','{$price}')";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:product.php');
	}else{
		echo "Some errors occurred while uploading..";
	}
?>