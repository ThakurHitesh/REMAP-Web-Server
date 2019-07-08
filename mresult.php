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

        <link rel="stylesheet" type="text/css" href="External.css">
        <style>
        @media (min-width: 768px) {
        .modal-xl {
            width: 90%;
            max-width:1200px;
            }
        }
        .modal p {
            word-wrap: break-word;
            }

        </style>
    </head>
    <?php include 'background.php';?>
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
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
              </ul>
            </div> 
          </div>
              </nav>
            </div>
        </header>
    <div style="margin-top: 8%;padding-left: 4%;padding-right: 4%;" class="container-fluid">
    <div class="card">
      <div class="card-header bg-info text-white" style="font-size: 18px;font-family: arial;">Results obtained for your query input:</div>
      <div class="card-body">
        <?php
          if(file_exists("scriptoutput/".$_SESSION['file']."_mergeall.txt")==1 && filesize("scriptoutput/".$_SESSION['file']."_mergeall.txt")!=0){ 
            $read=fopen( "scriptoutput/".$_SESSION['file']."_mergeall.txt" ,"r");
            $outread=fread($read, filesize("scriptoutput/".$_SESSION['file']."_mergeall.txt"));
            $lines=preg_split( "/\n/", $outread);
            $len=count($lines);
            echo "<div class='container-fluid'><div class='row'><div class='col-md-2' style='color: #202020;font-weight:bold;font-size: 18px;font-family: arial;'>Query</div><div class='col-md-2' style='color:#202020;font-weight:bold;font-size: 18px;font-family: arial;'>HIT</div><div class='col-md-2' style='color:#000066;font-weight:bold;font-size: 18px;font-family: arial;'>HIT Sequence</div><div class='col-md-1' style='color: #202020;font-weight:bold;font-size: 18px;font-family: arial;'>Strand</div><div class='col-md-1' style='color: #202020;font-weight:bold;font-size: 18px;font-family: arial;'>View Sequence</div><div class='col-md-1' style='color: #202020;font-weight:bold;font-size: 18px;font-family: arial;'>View Positions</div><div class='col-md-1' style='color: #202020;font-weight:bold;font-size: 18px;font-family: arial;'>Secondary Structure</div><div class='col-md-2' style='color: #202020;font-weight:bold;font-size: 18px;font-family: arial;'>Information</div></div></div>";
            for($i=0; $i<$len-1; $i++) {
              $eachcol=preg_split( "/\t/", $lines[$i]);
              echo "<div class='container-fluid'><hr><div class='row'><div class='col-md-2' style='color: #202020;font-size: 16px;font-family:arial'>".substr($eachcol[1],1)."</div><div class='col-md-2' style='color:#202020;font-size: 16px;font-family:arial'>".substr($eachcol[0],1)."</div><div class='col-md-2' style='color:#000066;font-size: 16px;font-family:arial'>".$eachcol[2]."</div><div class='col-md-1' style='color:#000066;font-size: 16px;font-family:arial'>".$eachcol[3]."</div><div class='col-md-1' style='color:#000066;font-size: 16px;'><button class='btn btn-md btn-danger' type='button' data-toggle='modal' data-target='#myModal".$i."'>Sequence</button>
                  <div class='modal fade' id='myModal".$i."'>
                    <div class='modal-dialog modal-xl' id='".$i."'>
                      <div class='modal-content'>
                        <div class='modal-header'>
                          <h4 class='modal-title'>".substr($eachcol[1],1)."</h4>
                          <button type='button' class='close' data-dismiss='modal'>&times;</button>
                        </div>
                        <div class='modal-body'>
                          ".
                          shell_exec("python Fetchseq.py '".substr($eachcol[1],1)."' '".$_SESSION['filepath1']."'");
                          $readseq=fopen( "scriptoutput/onclickseq".substr($eachcol[1],1).".txt" ,"r");
                          $outreadseq=fread($readseq, filesize("scriptoutput/onclickseq".substr($eachcol[1],1).".txt"));
                          echo "<p style='font-family:arial'>".$outreadseq."</p>"
                          ."
                        </div>
                        <div class='modal-footer'>
                          <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
                          <a href='scriptoutput/onclickseq".substr($eachcol[1],1).".txt' download='onclickseq".substr($eachcol[1],1).".txt'><button class='btn btn-md btn-danger'>Download</button></a>
                        </div>
                      </div>
                    </div>
                  </div>   
              </div>";
              echo "<div class='col-md-1' style='color:#000066;font-size: 16px;'><button class='btn btn-md btn-danger' type='button' data-toggle='modal' data-target='#myPosModal".$i."'>Positions</button>
                    <div class='modal fade' id='myPosModal".$i."'>
                    <div class='modal-dialog modal-xl' id='".$i."'>
                      <div class='modal-content'>
                        <div class='modal-header'>
                          <h4 class='modal-title'>".$eachcol[2]."</h4>
                          <button type='button' class='close' data-dismiss='modal'>&times;</button>
                        </div>
                        <div class='modal-body'><p style='font-family:arial'>".$eachcol[4]."</p></div>
                      </div>
                    </div>
                    </div>
                   </div>";
              echo"<div class='col-md-1' style='color:#000066;font-size: 16px;'><button class='btn btn-md btn-danger' type='button' data-toggle='modal' data-target='#myStrModal".$i."'>Structure</button>
                  <div class='modal fade' id='myStrModal".$i."'>
                    <div class='modal-dialog modal-xl' id='".$i."'>
                      <div class='modal-content'>
                        <div class='modal-header'>";
                          $idstem=[];
                          $idstem=explode(" ",$eachcol[0]);
                          shell_exec("python Closematch.py '".substr($idstem[0],1).  "'");
                          echo "<h4 class='modal-title'>".substr($idstem[0],1)."</h4>
                          <button type='button' class='close' data-dismiss='modal'>&times;</button>
                        </div>
                        <div class='modal-body'>
                          ";
                          $readseq=fopen( "scriptoutput/stemloop.txt" ,"r");
                          $outreadseq=fread($readseq, filesize("scriptoutput/stemloop.txt"));
                          echo "<iframe src='http://nibiru.tbi.univie.ac.at/forna/forna.html?id=fasta&file=%3Eheader".'\n'.$outreadseq."' width='1170' height='750'></iframe>
                        </div>
                      </div>
                    </div>
                  </div>   
              </div>";     
              $match=null;
              preg_match('/MIMAT([a-zA-Z0-9])+/',$eachcol[0],$match);
              echo "<div class='col-md-2' style='color: #202020;font-weight:bold;font-size: 18px;font-family: arial;'><a style='color:#ffffff;text-decoration:none;' target='_blank' href='http://www.mirbase.org/cgi-bin/mature.pl?mature_acc=".$match[0]."'><button class='btn btn-md btn-danger'>Link to miRBase</button></a></div> 
              </div></div>";
            }
        }
        else{
          echo '<br><div class="alert alert-info"><strong><i>Sorry! </i></strong> No Micro RNAs are present in your uploaded file. [Make sure the uploaded is not empty]</div><br>';
        }
        ?>
      </div> 
    </div>    
    </div>
    <div class="container" style="margin-top: 4%;">
      <div class="row">
        <div class="col-md-12" style="text-align: center;">
          <a style="color: #ffffff; font-family: Times" class="btn btn-lg btn-danger" role="button" href="<?php echo 'scriptoutput/'.$_SESSION['file'].'_results.txt'?>" download="<?php echo $_SESSION['file'].'_results.txt'?>">Download</a>
        </div>  
    </div>
  </div>
  <br>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>  
