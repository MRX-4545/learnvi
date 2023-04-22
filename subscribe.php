
<?php
include "connection.php";
session_start();
 

$x=$_POST['V_id'];
$amt=$_POST['total_amount'];
$id=$_POST['T_id'];
$y=$_SESSION['email'];
	
date_default_timezone_set('Asia/Kolkata');

$date = date('Y-m-d H:i:s');
$sql1 = "SELECT * FROM subscription WHERE V_id='$x' and S_email='$y' ";
		
		$result1 = mysqli_query($conn,$sql1);
		
		if(mysqli_num_rows($result1) > 0)
	{
		
			 // echo ("<script>alert('Selected Videos Already Subscribe!!!!!!');</script>");
				//  	echo"<script>window.open('viewvideo.php','_self');</script>";
		?>
		<script type="text/javascript">alert("Selected Videos Already Subscri");</script>
		<?php
			echo "Selected Videos Already Subscribed!"; 
	}
  
  else{

  

      $conn->query("INSERT INTO `subscription`(`S_email`, `T_id`,`Amount`,`Date`,`V_id`) VALUES('$y','$id','$amt','$date','$x')");
	 
	  
	       // echo "<script>alert('Sucessfully Subscribe video!!!!!!');</script>";
				 	// echo"<script>window.open('index.php','_self');</script>";
					
					
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
          $mail->addAddress($y);     // Add a recipient

          // //$mail->addReplyTo('info@example.com', 'Information');
			 $mail->isHTML(true);                                  // Set email format to HTML
			 $mail->Subject = 'Learn Vi';
       
           $mail->Body = '<h3 style="color:black;">Thank You for Subscribe Video!!</h3><br><h5>Your Payment has been Sucessfully for RS.' . $amt  .'.</h5>';
		
		
           if ($mail->send()) {
                 echo  "<script>alert('Sucessfully Subscribe video!!!!!!')</script>";
			   header('Location:index.php');
             } else {
                echo 'Message could not be sent.';
                //echo 'Mailer Error: ' . $mail->ErrorInfo;
				header('Location:index.php');
   
         }

	     
      
 
  }


        
?>
 
 
