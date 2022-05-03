<?php 
include('config.php');
$sql = "UPDATE orders SET order_status = 'delivered' WHERE id='{$_GET['id']}'";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:bookings.php');
	}else{
		echo "Some errors occurred while uploading..";
	}
?>