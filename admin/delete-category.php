<?php

include('config.php');
$id = $_GET['id'];

$sql =  "DELETE FROM categories WHERE id='{$id}'";
$result = mysqli_query($con, $sql);

if($result){
	header("Location:categories.php");
}else{
	echo "Could not be deleted..";
}
 ?>}
}
