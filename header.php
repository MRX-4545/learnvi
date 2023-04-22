<!-- Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
	session_start();
	?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>Learn Vi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Skill Point Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <!-- animation -->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/screenshot_view.css" rel='stylesheet' type='text/css' />
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400i,700i" rel="stylesheet">


    <!--//online fonts -->
</head>

<body>
    <div class="header"></div>
    <!-- header -->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="d-flex header-agile">
                            <li>
                                <span class="fas fa-envelope-open"></span>
                                <a href="mailto:example@email.com" class="text-white">mrxdell2002@gmail.com</a>
                            </li>
                            
                        </ul>
                    </div>
					<?php  if(!isset($_SESSION['email'])) { ?>
                    <div class="col-md-6 hearder-right-agile">
                        <div class="d-flex">
                            
                            <div class="login-wthree my-auto">
                                <a href="login.php" class="text-white text-capitalize">LOGIN<span class="fas fa-sign-in-alt flash animated infinite"></span></a>
                            </div>
							
					<?php } else  {  ?>
					<h6 class="text-white text-capitalize" style="margin-left:60px;"><span>Welcome</span>  <?php echo $_SESSION['name']; ?></h6>
							<h6><div style="margin-left:35px;"> 
                                <a href="changepassword.php" class="text-white text-capitalize">Change Password</a>
                            </div></h6>
							
							<h6><div style="margin-left:40px;">
                                <a href="logout.php" class="text-white text-capitalize">Logout</a>
                            </div></h6>
					<?php } ?>
							
					
					
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <h1><a class="navbar-brand" href="index.php">
                            <span>L</span>earn
                           
                            <span>VI</span>
                        </a></h1>
                    <button class="navbar-toggler ml-lg-auto ml-sm-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav text-center ml-auto">
                            <li class="nav-item active  mr-lg-3 mt-lg-0 mt-4">
                                <a class="hover-fill" href="index.php" data-txthover="Home">HOME</a>
                            </li>
                            <li class="nav-item  mr-lg-3 mt-lg-0 mt-4">
                                <a class="hover-fill" href="about.php" data-txthover="About">ABOUT</a>
                            </li>
                            <li class="nav-item  mr-lg-3 mt-lg-0 mt-4">
                                <a class="hover-fill" href="viewvideo.php" data-txthover="View Video">VIEW VIDEO</a>
                            </li>
							<?php  if(isset($_SESSION['email'])) { ?>
							 <li class="nav-item  mr-lg-3 mt-lg-0 mt-4">
                                <a class="hover-fill" href="playlist.php" data-txthover="My Playlist">MY PLAYLIST</a>
                            </li>
							<?php } ?>
                           
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- //header -->