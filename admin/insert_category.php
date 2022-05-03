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
	$created_date = date('Y-m-d');

	$sql = "INSERT INTO categories (name, image, created_date) VALUES ('{$name}', '{$image}', '{$created_date}')";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:categories.php');
	}else{
		echo "Some errors occurred while uploading..";
	}
?>