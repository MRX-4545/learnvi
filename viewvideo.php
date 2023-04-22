<?php
include('header.php');
include('connection.php');
$q = "SELECT * from videos";
$data = mysqli_query($conn, $q);
$result = mysqli_num_rows($data);
date_default_timezone_set('Asia/Kolkata');

?>

<div class="row">
	<div class="col-md-3">

		<h3 style="margin-left:120px;font-family:times New Roman;">Category</h3>
		<hr>
		<?php


		$q1 = "SELECT * from technology";	

		$data1 = mysqli_query($conn, $q1);
		$result1 = mysqli_num_rows($data1);

		if ($result1 > 0) {

			$i = 1;
			while ($total1 = mysqli_fetch_assoc($data1)) { 


				?>

				<ul>

					<center> <li style="margin-top:10px;color:red;"><a href="viewvideo.php?T_id=<?php echo $total1['T_id']; ?>"><?php echo $total1['T_name']; ?></a></li></center>

				<?php  } }?>

			</ul>

		</div>


		<div class="col-md-9">
			<?php
			if(isset($_GET['T_id'])){
				$T_id=$_GET['T_id'];
				 //echo "hiii";
				$q3 = "SELECT * from videos where T_id = '$T_id'";
				$data3 = mysqli_query($conn, $q3);
				$result3 = mysqli_num_rows($data3);
			}

			else
			{

				$q3 = "SELECT * from videos";
				$data3 = mysqli_query($conn, $q3);
				$result3 = mysqli_num_rows($data3);

			}

			if ($result3 != 0) {

				$i = 1;
				while ($total1 = mysqli_fetch_assoc($data3)) { ?>

					<ul class="portfolio-area clearfix">
						<li class="portfolio-item2" data-id="id-1" data-type="cat-item-1" style="width:300px;">

							<?php $url= "./admin/"."".$total1["Video"]; ?>
							<a href="<?php echo $url; ?>" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">

								<video controls autoplay height="150" width="300"><source src=""  type="video/mp4"/></video> 
							</a>
							<div class="title-section pb-4">
								<h5 class="main-title-agile"><?php echo $total1['V_name']; ?></h5>
								<div class="title-line">
								</div>
							</div>

							<p><?php echo $total1['Video_description']; ?></p>
							<div class="row">
								<div class="col-md-6">
									<p style="color:#6238C1 ; margin-top:10px; font-size:15px; font-weight:600;">Price : <?php echo $total1['Amount']; ?> Rs./-</p>
								</div>

								<input type="hidden" name="Amount" value="<?php echo $total1['Amount']; ?>" id="Amount" >

								<input type="hidden" name="V_id" value="<?php echo $total1['V_id']; ?>" id="V_id" style="margin-left:10px;">

								<input type="hidden" name="T_id" value="<?php echo $total1['T_id']; ?>" id="T_id" style="margin-left:10px;">

								<input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>" id="email" style="margin-left:10px;">



								<?php  if(isset($_SESSION['email'])) { ?>
									<div class="col-md-6">

										<?php $sql="select * from subscription where V_id= '{$total1['V_id']}' and S_email = '{$_SESSION['email']}'";

										$data4 = mysqli_query($conn, $sql);
									$result4 = mysqli_num_rows($data4); ?>
									

										
										<button  type="button" onclick="pay(<?php echo $total1['Amount']; ?>,<?php echo $total1['V_id']; ?> , <?php echo $total1['T_id']; ?>)" class="btn btn-danger" style="margin-bottom:10px; margin-left:15px;" <?php if($result4 > 0){ echo "disabled";}?> >Subscribe</button> 
										


									</div>
								<?php } else { ?>

									<a href="login.php" class="btn btn-primary" style="margin-left:40px; margin-bottom:5px; height:35px; width:100px;" >Login</a> 
								<?php } ?>


							</div>


						</li>



					<?php } } else {?>

						<h2 style="margin-top:50px;margin-left:100px;">Videos are not available</h2> <?php } ?>

					</ul>
				</div>

			</div>

			<?php
			include('footer.php');
			?>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
			<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
			<script type="text/javascript">

				function pay(amt,vid,tid,email){
					var V_id = vid;
					var T_id = tid;
					var totamount = amt;
					var totalAmount = amt * 100;
					var merchant_total = totalAmount;
					var currency_code_id = "INR";
					var options = {
						"key": "rzp_test_98Ozda9wzffKQ6",
		"amount": merchant_total, // 2000 paise = INR 20
		"name": "Learn Vi",
		"description": "Video Subscription",

		"currency" : "INR",
		"netbanking" : true,
		prefill: {

			contact: 9898989898,

		},
		"handler": function (response){
  // alert("inside ajax"); 
  jQuery.ajax({
  	type: "POST",
  	dataType:"json",
  	url: 'http://localhost/learnvi/subscribe.php',
  	data: {
      //payment_id: response.razorpay_payment_id, 
      'total_amount': totamount,
      'V_id': V_id,
      'T_id': T_id,
    }, 
    success: function (data1) {
      // This code will execute after a successful AJAX call
      alert(data1);
      //console.log(data);
      window.location.href = 'index.php';
    },
    error: function(data) {
    	successmessage = 'Error';
    },
  });
},


"theme": {
	"color": "#528FF0"
}
};

var rzp1 = new Razorpay(options);
rzp1.open();    	  

   //e.preventDefault();

 }

</script>



