<?php 
	session_start();
	require 'connection.php'; 
	if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	 $sql="SELECT * FROM `viewers`  where email = '$email' and password='$password'";
	 $data=mysqli_query($conn,$sql);
	 $num=mysqli_fetch_array($data);
	if($num > 0){
	$status=$num['status'];
	if($status == 0){
	
		
		$_SESSION['email'] = $num['email'];
		$_SESSION['name'] = $num['name'];

		//$_SESSION['id'] = $num['id'];
		echo "<script>alert('login sucessfully')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
	else{
			echo "<script>alert('Your account blokced by admin!!')</script>";
			echo "<script>window.open('index.php','_self')</script>";
		}
	}
	else{
		echo "<script>alert('invalid Email And Password')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
	
	}
	

	
?>