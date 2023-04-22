<?php
include('connection.php');
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobileno'];
$gender = $_POST['gender'];
$sql1 = "SELECT * FROM viewers WHERE email='$email'";
		
		$result1 = mysqli_query($conn,$sql1);
		
		if(mysqli_num_rows($result1) > 0)
	{
			 echo "<script>alert('Email Already Exists!!!!!!')</script>";
				 	echo"<script>window.open('index.php','_self')</script>";
	}
  
  else{

$query = "insert into viewers(name,email,password,mobile,gender) values('$name','$email','$password','$mobile','$gender')";

$result=mysqli_query($conn,$query);
if($result){
echo "<script>alert('Registration sucessfully')</script>";
echo "<script>window.open('login.php','_self')</script>";

}
else{
	echo "<script>alert('error!!')</script>";
	echo "<script>window.open('registration.php','_self')</script>";
}


 
}
}

?>
 
