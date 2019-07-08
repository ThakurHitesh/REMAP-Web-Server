<?php
// Start the session
session_start();
function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'), range('A','Z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}

$_SESSION['token']=random_string(25);

$deletefiles=array("scriptoutput/*","basicutility/Scriptout/*","basicutility/UploadBU/*","Uploads/Choosefile/*","Uploads/Inputfile/*");
for ($d=0;$d<sizeof($deletefiles);$d++){
  $files = glob($deletefiles[$d]);
  foreach($files as $file) { // iterate files
    // if file creation time is more than 5 minutes
    if ((time() - filectime($file)) > 86400) {  // 86400 = 60*60*24
        unlink($file);
    }
}
}
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/fav.png" type="image/png">
        <title>Home</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script type="text/javascript" src="External.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>
    <style type="text/css">
    .zoom {
  transition: transform .2s; /* Animation */
}

.zoom:hover {
  transform: scale(1.05); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
    #mySidenav{
        position: fixed;
        top:12%;
    }
    #mySidenav a {
    position: absolute;
    z-index: +5;
    left: -190px;
    transition: 0.3s;
    padding: 15px;
    width: 200px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 0 5px 5px 0;
    }

    #mySidenav a:hover {
        left: 0;
    }

    #nav1 {
        top: 20px;
        background-color: #4CAF50;
    }

    #nav2 {
        top: 80px;
        background-color: #2196F3;
    }

    #nav3 {
        top: 140px;
        background-color: #f44336;
    }

    </style>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">	
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" id = "logohead" href="index.php"><img src="img/fav.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
								<li class="nav-item"><a class="nav-link" href="tools.php">Tools</a></li>
                                <li class="nav-item"><a class="nav-link" href="basicmodule.php">Basic Utility</a></li> 
								<li class="nav-item"><a class="nav-link" href="about-us.php">About</a></li>
								<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        <div id="mySidenav" class="sidenav">
          <a href="tools.php#TmiRNA" id="nav1">mi-RNA</a>
          <a href="tools.php#Tssr" id="nav2">SSR</a>
          <a href="tools.php#Tsnp" id="nav3">SNP</a>
        </div>
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
				<div id="mycarousel" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        <li data-target="#mycarousel" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img1.jpg">
                            <div class="carousel-caption">
                                <h2><b>MICRO RNA PREDICTION</b></h2>
                                <h4>Vital and evolutionarily ancient component of gene regulation</h4>
                                <div id="carousalbtn"><a class="white_btn" href="tools.php#TmiRNA">miRNA Prediction</a></div>
                            </div>  
                        </div>
                        <div class="carousel-item">
                            <img src="img2.jpg">
                            <div class="carousel-caption">
                                <h2><b>SINGLE NUCLEOTIDE POLYMORPHISM PREDICTION</b></h2>
                                <h4>Substitution of a single nucleotide</h4>
                                <div id="carousalbtn"><a class="white_btn" href="tools.php#Tsnp">SNP Prediction</a></div>
                            </div>  
                        </div>
                        <div class="carousel-item">
                            <img src="img3.jpg">
                            <div class="carousel-caption">
                                <h2><b>SIMPLE SEQUENCE REPEATS PREDICTION</b></h2>
                                <h4>Tract of repetitive DNA</h4>
                                <div id="carousalbtn"><a class="white_btn" href="tools.php#Tssr">SSR Prediction</a></div>
                            </div>   
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#mycarousel" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#mycarousel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            <div class="donation_area">
				<div class="container">
					<div class="row donation_inner">
						<div class="col-lg-4">
							<div class="dontation_item green zoom">
								<div class="media">
									<div class="media-body">
										<h4>SSR Prediction</h4>
										<p>Tool finds all perfect simple sequence repeats (SSRs) in a given sequence</p>
									</div>
									<div class="d-flex">
										<a class="white_btn" href="tools.php#Tssr">Hit Me</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="dontation_item yellow zoom">
								<div class="media">
									<div class="media-body">
										<h4>micro RNA</h4>
										<p>Tool designed to quickly identify microRNAs that target specific gene transcripts</p>
									</div>
									<div class="d-flex">
										<a class="white_btn" href="tools.php#TmiRNA">Hit Me</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="dontation_item pink zoom">
								<div class="media">
									<div class="media-body">
										<h4>SNP Prediction</h4>
										<p>Tool that permits single nucleotide polymorphism (SNPs) detection and analysis for the given sequences</p>
									</div>
									<div class="d-flex">
										<a class="white_btn" href="tools.php#Tsnp">Hit Me</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Welcome Area =================-->
        <section class="welcome_area p_120">
        	<div class="container">
        		<div class="row welcome_inner">
        			<div class="col-lg-6">
        				<div class="welcome_text">
        					<h4>Welcome to Re-Map: Basic Utility Module</h4>
        					<p>Module that provide certain tools for sequence(s) analysis which is a process of subjecting a DNA, RNA or peptide sequence to any of a wide range of analytical methods to understand its features, function, structure, or evolution. Methodologies used include sequence alignment, searches against biological databases, and others.</p>
        					<div class="row">
        						<div class="col-sm-4">
        							<div class="wel_item">
        								<i class="lnr lnr-database"></i>
        								<h5>Translation</h5>
        							</div>
        						</div>
        						<div class="col-sm-4">
        							<div class="wel_item">
        								<i class="lnr lnr-book"></i>
        								<h5>Consensus</h5>
        								</div>
        						</div>
        						<div class="col-sm-4">
        							<div class="wel_item">
        								<i class="lnr lnr-users"></i>
        								<h5>ORF Finder</h5>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="welcome_img">
        					<img class="img-fluid" src="img/dynamic.jpg" alt="">
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Welcome Area =================-->
        
       
        
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
                    <p class="col-lg-8 col-md-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
                    <div class="col-lg-4 col-md-4 footer-social">
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
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>
