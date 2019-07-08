<?php
// Start the session
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/fav.png" type="image/png">
        <title>Kindity Charity Multi</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">	
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.php"><img src="img/fav.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="tools.php">Tools</a></li>
                                <li class="nav-item"><a class="nav-link" href="basicmodule.php">Basic Utility</a></li>
								<li class="nav-item"><a class="nav-link" href="about-us.php">About</a></li> 
								<li class="nav-item active"><a class="nav-link" href="contact.php">Contact</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Contact Us</h2>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button name="connectmsg" type="submit" value="submit" class="btn submit_btn">Send Message</button>
                            </div>
                        </form>
                        <?php
                            if(isset($_POST['connectmsg'])){
                                if($_POST) {
                                    $email = "";
                                    $subject = "";
                                    $message = "";
                                    
                                    if(isset($_POST['email'])) {
                                        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
                                        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
                                    }
                                     
                                    if(isset($_POST['message'])) {
                                        $message = htmlspecialchars($_POST['message']);
                                    }

                                    if(isset($_POST['subject'])) {
                                            $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
                                        }
                                    $recipient = "hiteshthakur20@gmail.com";
                                     
                                    $headers  = 'MIME-Version: 1.0' . "\r\n"
                                    .'Content-type: text/html; charset=utf-8' . "\r\n"
                                    .'From: ' . $email . "\r\n";
                                     
                                    if(mail($recipient, $subject, $message, $headers)) {
                                        echo "<p>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
                                    } else {
                                        echo '<p>We are sorry but the email did not go through.</p>';
                                    }
                                     
                                } else {
                                    echo '<p>Something went wrong</p>';
                                }}
                                ?>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
        
        <!--================ start footer Area  =================-->	
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About RE-MAP</h6>
                            <p style="text-align:justify">Re-MAP Server provides various options to annotate map and predict regulatory elements in terms of micro-RNA (miRNA), Single Nucleotide Polymorphism (SNP) and Simple Sequence Repeats (SSR). User can input single as well as multiple sequences at transcriptomics, genomics and proteomics level to predict and above stated regulatory elements. </p>
                        </div>
                    </div>							
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Connect with us</h6>       
                            <div id="mc_embed_signup">
                                <form method="POST" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input type="email" id="email" name="visitor_email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required>
                                        <input type="textarea" id="message" name="visitor_message" placeholder="Say whatever you want." required>
                                        <button type="submit" id="mailbtn" class="btn sub-btn"><span class="lnr lnr-location"></span></button>      
                                    </div>                                  
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                            <?php
                            if(isset($_POST['mailbtn'])){
                                if($_POST) {
                                    $visitor_email = "";
                                    $email_title = "";
                                    $visitor_message = "";
                                    
                                    if(isset($_POST['visitor_email'])) {
                                        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
                                        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
                                    }
                                     
                                    if(isset($_POST['visitor_message'])) {
                                        $visitor_message = htmlspecialchars($_POST['visitor_message']);
                                    }
                                    $recipient = "hiteshthakur20@gmail.com";
                                     
                                    $headers  = 'MIME-Version: 1.0' . "\r\n"
                                    .'Content-type: text/html; charset=utf-8' . "\r\n"
                                    .'From: ' . $visitor_email . "\r\n";
                                     
                                    if(mail($recipient, $email_title, $visitor_message, $headers)) {
                                        echo "<p>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
                                    } else {
                                        echo '<p>We are sorry but the email did not go through.</p>';
                                    }
                                     
                                } else {
                                    echo '<p>Something went wrong</p>';
                                }}
                                ?>
                        </div>
                    </div>				
                </div>
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-8 footer-text m-0">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                    <div class="col-lg-4 col-sm-4 footer-social">
                        <a href="https://www.instagram.com/___el_diablo/" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/hitesh-thakur/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>