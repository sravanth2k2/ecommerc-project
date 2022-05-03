<?php 
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

// Connection with database.. .
$con = mysqli_connect('localhost', 'root', '', 'ecommerce2');
if($con){
	
	$sql = "SELECT * FROM admins WHERE username = '{$username}' AND password = '{$password}'";
	$result = mysqli_query($con,$sql);


	$data = [];
	while($row = mysqli_fetch_array($result)){
	    $data = $row;
	 };
	 if($result->num_rows > 0){

	 	$_SESSION['admin'] = $data;
	 	$_SESSION['login'] = true; 
	 	header('location:index.php');
	 }else{
	 	echo "User ID or Password not Matched..";
	 }

}else{
	echo mysqli_connect_error();
}
?>