<?php
include('header.php'); ?>
    <div class="row justify-content-center align-items-center no-gutters banner-agile">
        <div class="col-lg-8">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item bg1 active">
                        <div class="bnr-text-wthree">
                            <h3 class="b-w3ltxt">Learn anytime</h3>
                            <p class="mx-auto text-capitalize mt-2 text-white">education and training center</p>
                        </div>
                    </div>
                    <!-- slider text -->
                    <div class="carousel-item bg2">
                        <div class="bnr-text-wthree">
                            <h3 class="b-w3ltxt">24/7 Support</h3>
                            <p class="mx-auto text-capitalize mt-2 text-white">education and training center</p>
                        </div>
                    </div>
                    <!-- slider text -->
                    <div class="carousel-item bg3">
                        <div class="bnr-text-wthree">
                            <h3 class="b-w3ltxt">Start As Beginner</h3>
                            <p class="mx-auto text-capitalize mt-2 text-white">education and training center</p>
                        </div>
                    </div>
                    <!-- slider text -->
                </div>
            </div>
            <!-- Carousel -->
            <!-- //banner -->
        </div>
        <div class="col-lg-4">
            <div class="wthree-form">
                <h4>Registrstion Form</h4>
                <form action="registration_process.php" method="post" class="register-wthree">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="fas fa-user"></span>
                                <label>
                                    Name
                                </label>
                                <input class="form-control" type="text" placeholder="Enter Your Name" name="name"  onkeypress="return (event.charCode > 64 && event.charCode < 91 ) || (event.charCode > 96 && event.charCode < 123 ) || (event.charCode == 32)" required>
                            </div>
                     
                                
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="fas fa-envelope-open"></span>
                                <label>
                                    Email
                                </label>
                                <input class="form-control" type="email" placeholder="Enter Your Email" name="email"
                                    required>
                            </div>
                        </div>
                    </div>
                   <div class="form-group">
                        <div class="col-md-12">
                            <span class="fas fa-male"></span>
                           <label for="gender"> Select you gender</label>
                           <select name="gender" class="form-control" required>
	                         <option value="none" selected>Gender</option>
	                         <option value="male">Male</option>
	                         <option value="female">Female</option>
	                         
                           </select>
                          
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="fas fa-mobile"></span>
                                <label>
                                Mobile Number
                                </label>
                                <input type="text" class="form-control" placeholder="XXXXX XXXXX" name="mobileno" onkeypress='return event.charCode >= 48 && event.charCode <= 57' pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="fas fa-lock"></span>
                                <label>
                                  Password
                                </label>
                                <input type="password" class="form-control" placeholder="*******" name="password" id="password1" 
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-agile btn-block w-100" name="submit">register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
   <?php include('footer.php');?>