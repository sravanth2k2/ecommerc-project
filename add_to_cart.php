<?php
session_start();
include('config.php');
$product_id = $_GET['id'];
$type = $_GET['type'];


$product = array();

if($con){
  	$sql = "SELECT * FROM product WHERE id = '{$product_id}' ";
    
    $result = mysqli_query($con,$sql);
    if($result->num_rows!=0)
    {
      while($row = mysqli_fetch_array($result))
      {
        $product = $row;
      }
    }
  }



if(!isset($_SESSION['cart'])){
	$cart = [];
}else{
	$cart = $_SESSION['cart'];
}

if(isset($cart[$product_id])){
	// Here we are checking if any url of type is coming [increment / decrement]
	if(isset($type)){
		if($type == 'increment'){
			if($cart[$product_id]['product_qty'] != 10){
				$cart[$product_id]['product_qty'] = $cart[$product_id]['product_qty'] + 1;
			}
		}elseif($type == 'decrement'){
			if($cart[$product_id]['product_qty'] != 1){
				$cart[$product_id]['product_qty'] = $cart[$product_id]['product_qty'] - 1;
			}
		}elseif($type == 'remove'){
			unset($cart[$product_id]);
		}
	}else{
		// Increment 
		$cart[$product_id]['product_qty'] = $cart[$product_id]['product_qty'] + 1;
	}
}else{
	$cart[$product_id] = [
		'product_id' => $product_id,
		'product_name' => $product['name'],
		'product_image' => $product['image'],
		'product_qty' => 1,
		'product_price' => $product['price']
	];
}

$_SESSION['cart'] = $cart;
$cart = $_SESSION['cart'];

header('location:cart.php')
?>