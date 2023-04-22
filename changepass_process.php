<?php
session_start();
require 'connection.php';
if(isset($_POST['submit']))
{
$oldpass= $_POST['old_pass'];
$newpass= $_POST['new_pass'];
$email=$_SESSION['email'];

$sql=mysqli_query ($conn,"SELECT password FROM viewers where password='$oldpass' && email='$email'");

$num=mysqli_fetch_array($sql);
if($num>0)
{
 $conn=mysqli_query($conn,"update viewers set password='$newpass' where email='$email'");

echo "<script>alert('Password Changed Successfully !!')</script>";
	echo"<script>window.open('login.php','_self')</script>";
}
else
{
	echo "<script>alert('Old Password does not match !!')</script>";
	echo"<script>window.open('changepassword.php','_self')</script>";
	
	
}
}
?>