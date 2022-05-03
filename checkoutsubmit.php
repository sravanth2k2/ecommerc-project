<?php
session_start();
	$user_information = json_encode($_POST);
	$product_information = $_SESSION['cart'];
	$product_informations = json_encode($_SESSION['cart']);
	$total_price = 0;

  	foreach ($product_information as $key => $value) {
  		$total_price+= $value['product_price'] * $value['product_qty'];
  	}

  	$date_of_order = date('Y-m-d');
  	$order_id = 'FLIPCA001';

  	include('config.php');
  	$sql = "INSERT INTO orders (order_id, total_price, user_information, product_information, date_of_order) VALUES ('{$order_id}', '{$total_price}', '{$user_information}', '{$product_informations}', '{$date_of_order}')";

	$result = mysqli_query($con,$sql);
	if($result){
		session_destroy();
		header('location:index.php');
	}else{
		echo "Some errors occurred while uploading..";
	}


?>