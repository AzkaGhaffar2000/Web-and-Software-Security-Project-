<?php 
	session_start();
    
    include("ConnectNatureDB.php");

	if (isset($_SESSION['AccID']))
	{
        $AccountID = $_SESSION['AccID'];
	}
	else
	{
		header("Location:logout.php");
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NATUTRE- Life Blog HTML Template</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header class="header-area">
        <div class="top-header-area bg-img bg-overlay" style="background-image: url(img/gif29.gif);">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-between">
                    <div class="col-12 col-sm-6">
                        <!-- Top Social Info -->
                        <div class="top-social-info">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-5 col-xl-4">
                        <!-- Top Search Area -->
                        <div class="top-search-area">
                            <form action="searchB.php" method="post">
                                <input type="search" name="Name" id="Name" placeholder="Search">
                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="bueno-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="buenoNav">

                        <!-- Toggler -->
                        <div id="toggler"></div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                           <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="user.php">Home</a></li>
                                    <li><a href="video.php">Videos</a> </li>
                                    <li><a href="photos.php">Photos</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="contactus.php">Contact</a></li>
                                </ul>

                                <div class="logout-area">
                                    <a href="logout.php">Log Out</a>
                                </div>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

   
    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8 col-xl-9">
                    <div class="post-details-content mb-100">
                        <div class="blog-thumbnail mb-50">
                            <img src="img/gif26.gif" alt="">
                        </div>
                        <div class="blog-content">
                            <a href="#" class="post-tag">Nature</a>
                        <a href="#" class="post-title">LIVE MINUTE-BY-MINUTE!</a>
                        <div class="post-meta mb-50">
                            <a href="#" class="post-date">April 22, 2020</a>
                            <a href="#" class="post-author">By Admin</a>
                        </div>
                        <p>Stop pushing yourself too much. Things do get hard sometimes but that is just part of life. Stop running instead walking, sit if you want to, take a breath. It is also okay if you fall, it will teach how to get back up on your feet again. Everything in this universe is a representation of Hope and Beauty. From Galaxy of Stars to Clear Sky in the morning, Bright Moon to Bright Sun, Sunrise to Sunset. Everything keeps moving at it's pace and looks beautiful, so don't rush. BE POSITIVE. JUST LOOK ON THE BRIGHT SIDE. U GOT THIS:)</p>
                    <p>LOOK AROUND YOU!!</p>
  					<p>Everything is so calm and silent. It might be super cold to but positive and negative come in a package. U might hurt youself in the process too,but that's what makes it worth it. Same goes for people in our life, 
  we can't just meet good people without having to encounter bad ones. Click on each gif to be dircted to recommended music/sound. BE POSITIVE. JUST LOOK ON THE BRIGHT SIDE. U GOT THIS:)</p>
                    </div>

                    <!-- Comment Area Start -->
                    <div class="post-a-comment-area mb-30 clearfix">
                        <h4 class="mb-50">Comment</h4>

                       <!-- Reply Form -->
                        <div class="contact-form-area">
                            <form action="postC.php" method="post">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="col-12">
                                        <input name="website" type="text" class="form-control" id="website" placeholder="Website">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn bueno-btn mt-30" type="submit">Submit Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>