<?php 
	session_start();
	require 'connection.php'; 
	if(isset($_POST['submit'])){
	$email = $_POST['email'];
	
	 $sql="SELECT * FROM `viewers`  where email = '$email' ";
	 $data=mysqli_query($conn,$sql);
	 $num=mysqli_fetch_array($data);
	if($num > 0){
	
		
		$_SESSION['email1'] = $num['email1'];
		$_SESSION['name'] = $num['name'];
		$_SESSION['password']=$num['password'];
		$pass=$_SESSION['password'];
		$email=$_SESSION['email'];
		require 'phpmail/PHPMailerAutoload.php';
        $mail = new PHPMailer();



		$headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->SMTPSecure = 'STARTTLS';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'aksmul501@gmail.com';                 // SMTP username
		$mail->Password = 'scwvckolmpsdvofl';                               // SMTP password

        $mail->setFrom('aksmul501@gmail.com', 'Learn Vi');
        $mail->addAddress($email);     // Add a recipient

        $mail->addReplyTo('info@example.com', 'Information');
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Recovery Password';
       
        $mail->Body = '<h3 style="color:black;"> Your Password is : ' . $pass . '. Please do not disclose it.</h3>';
		


        if ($mail->send()) {
               echo "<script>alert('Please check your email account')</script>";
		   echo"<script>window.open('login.php','_self')</script>";
           } else {
              echo 'Message could not be sent.';
              //echo 'Mailer Error: ' . $mail->ErrorInfo;
           header('Location:index.php');
   
       }

		
		//echo "<script>alert('Please check your email account')</script>";
		//echo "<script>window.open('index.php','_self')</script>";
	}
	else{
		echo "<script>alert('invalid Email')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
	
	}
	

	
?>