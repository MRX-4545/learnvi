<div class="footer-top py-5">
         <div class="container">
            <div class="row footer-cform pt-lg-5">
                <div class="col-lg-6">
                    <h5 class="footer-top-title">site navigation</h5>
                    <div class="footer-top-agileits">
                        <ul class="list-agileits d-flex">
                            <li>
                                <a href="index.php" class="nav-link py-0 pl-0">
                                    HOME
                                </a>
                            </li>
                            <li>
                                <a href="about.php" class="nav-link py-0">
                                    ABOUT US
                                </a>
                            </li>
                            <li>
                                <a href="viewvideo.php" class="nav-link py-0">
                                    VIEW VIDEO
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="footer-cont-btm">
                        <h5 class="footer-top-title">contact information</h5>
                       
                        <ul class="d-flex header-agile pt-0">
                            <li>
                                <span class="fas fa-envelope-open"></span>
                                <a href="#" class="text-secondary">mrxdell2002@gmail.com</a>
                            </li>
                            <li>
                                <span class="fas fa-phone-volume"></span>
                                <p class="d-inline text-secondary">+6359296897</p>
                            </li>
                        </ul>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- //footer top -->
    <!-- footer -->
    <footer>
       
                <div class="col-lg-3 my-lg-auto mt-3">
                    <div class="cpy-right text-lg-right text-center">
                         <p class="text-secondary">
                            2023 | Design by Nishanth Limbachy

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->
    <!-- js-->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- loading-gif Js -->
    <script src="js/modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->
    <!-- Multiple select filter using jQuery -->
    <script src="js/custom-select.js"></script>
    <!-- //Multiple select filter using jQuery -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js">
    </script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
             var defaults = {
            	 containerID: 'toTop', // fading element id
            	 containerHoverID: 'toTopHover', // fading element hover id
            	 scrollSpeed: 1200,
            	 easingType: 'linear' 
             };
             */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- jQuery-Photo-filter-lightbox-portfolio-plugin -->
    <script src="js/jquery-1.7.2.js"></script>
    <script src="js/jquery.quicksand.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <!-- //jQuery-Photo-filter-lightbox-portfolio-plugin -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js">
    </script>
    <!-- //Bootstrap Core JavaScript -->
</body>

</html>