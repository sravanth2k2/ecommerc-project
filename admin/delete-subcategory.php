<?php

include('config.php');
$id = $_GET['id'];

$sql =  "DELETE FROM subcategories WHERE id='{$id}'";
$result = mysqli_query($con, $sql);

if($result){
	header("Location:subcategories.php");
}else{
	echo "Could not be deleted..";
}
 ?>}
}
