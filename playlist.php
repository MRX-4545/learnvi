<?php
include('header.php');
include('connection.php');

$email = $_SESSION['email'];
$q = "SELECT a.*,b.*,c.* from subscription as a ,videos as b,technology as c 
		where a.V_id=b.V_id and b.T_id=c.T_id and a.date+b.days_limit >= curdate() AND a.S_email = '$email'";
		
$data = mysqli_query($conn, $q);
$result = mysqli_num_rows($data);

 ?>

   
    <section class="wthree-row w3-gallery py-sm-5 py-3">
    
        <div class="container py-lg-5 py-3">
            <div class="title-section pb-4">
                <h3 class="main-title-agile">Videos</h3>
                <div class="title-line">
                </div>
            </div>
           
            <ul class="portfolio-area clearfix">
			<?php 
            if ($result != 0) {
 
 $i = 1;
 while ($total1 = mysqli_fetch_assoc($data)) { ?>
                <li class="portfolio-item2" data-id="id-1" data-type="cat-item-1">
                   
                        <?php $url= "./admin/"."".$total1["Video"]; ?>
                            <a href="<?php echo $url; ?>" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                               
									<video controls autoplay height="200" width="350"><source src="<?php echo $url; ?>"  type="video/mp4"/></video> 
                            </a>
						<div class="title-section pb-4">
                <h5 class="main-title-agile"><?php echo $total1['V_name']; ?></h5>
				
				 <!--h6 class="main-title-agile"><?php echo $total1['T_name']; ?></h6-->
                <div class="title-line">
                </div>
				
            </div>
			<p><?php echo $total1['Video_description']; ?></p>
			  
                
                </li>
                
                
               <?php } } ?>
               
            </ul>

            <!--end portfolio-area -->
        </div>
        
        <!-- //gallery container -->
    </section>
    
    <!-- //portfolio -->
   
    <?php
include('footer.php');
 ?>