<?php 
include('header.php');?>
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
                            <h3 class="b-w3ltxt">the perfect theme for</h3>
                            <p class="mx-auto text-capitalize mt-2 text-white">education and training center</p>
                        </div>
                    </div>
                    <!-- slider text -->
                    <div class="carousel-item bg2">
                        <div class="bnr-text-wthree">
                            <h3 class="b-w3ltxt">the perfect theme for</h3>
                            <p class="mx-auto text-capitalize mt-2 text-white">education and training center</p>
                        </div>
                    </div>
                    <!-- slider text -->
                    <div class="carousel-item bg3">
                        <div class="bnr-text-wthree">
                            <h3 class="b-w3ltxt">the perfect theme for</h3>
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
                <h4>Change Password</h4>
                <br>
                <form action="changepass_process.php" method="POST" class="register-wthree">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="fas fa-envelope-open"></span>
                                <label>
                                    Old Password
                                </label>
                                <input class="form-control" type="text" placeholder="*******" name="old_pass"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="fas fa-lock"></span>
                                <label>
                                    New Password
                                </label>
                                <input type="password" class="form-control" placeholder="*******" name="new_pass" id="password"
                                    required>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-agile btn-block w-100" name="submit">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php 
include('footer.php');?>