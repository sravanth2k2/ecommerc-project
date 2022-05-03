<?php 
include('config.php');

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
	$date = date('Y-m-d');

	$sql = "UPDATE subcategories SET name = '{$name}', created_date = '$date', image = '{$image}' WHERE id='{$_GET['id']}'";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:subcategories.php');
	}else{
		echo "Some errors occurred while uploading..";
	}

?>