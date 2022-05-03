<?php

include('config.php');
$id = $_GET['id'];

$sql =  "DELETE FROM product WHERE id='{$id}'";
$result = mysqli_query($con, $sql);

if($result){
	header("Location:product.php");
}else{
	echo "Could not be deleted..";
}
 ?>}
}
