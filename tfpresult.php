<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="External.css">
   <link rel="stylesheet" type="text/css" href="CssContact.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Arapey' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Abhaya Libre' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Tauri' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Unna' rel='stylesheet'>
  <script type="text/javascript" src="External.js"></script>
  </head>
  <?php include "tfpbackground.php" ?>
  <body>
  	<div class="container-fluid">
  		<div class="row" id="row1">
  			<div class="col-md-4">
                <ul class="list-unstyled list-inline" id="ul1">
  					<li><i class="fa fa-envelope"></i></li>
  					<li><a href="mailto:email@gmail.com">email@gmail.com</a></li>
  				</ul>
    		</div> 
        <div class="col-md-4" align="center" style="color:#ffffff;">
          Regulatory Element Mapping And Prediction Server
        </div>
    	    <div class="col-md-4">
    		 	<ul class="list-unstyled list-inline" id="ul2">
  					<li><a href="https://www.facebook.com/login/"><i class="fa fa-facebook"></i></a></li>
  					<li><a href="https://myaccount.google.com/"><i class="fa fa-google"></i></a></li>
  					<li><a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a></li>
  				</ul>
    		</div>
    	</div>	
    </div>
    <nav class="nav navbar-default">
    	<div class="navbar-header" id="nav1">
    		<button class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
    			<span class="icon-bar"></span>
    			<span class="icon-bar"></span>
    			<span class="icon-bar"></span>
    		</button>
    		<div class="navbar-brand" id="brand1">RE-MAP SERVER</div>
    	</div>
    	<div class="collapse navbar-collapse" id="navbar1">
    		<ul class="nav navbar-nav navbar-right" id="navt">
    			<li><a href="index.php" id="navc1">Home</a></li>
          <li><a href="Tools.php" id="navc1">Tools</a></li>
          <li><a href="About.php" id="navc1">About</a></li>
          <li><a href="Team.php" id="navc1">Team</a></li>
          <li><a href="Contact.php" id="navc1">Contact</a></li>
    		</ul>
    	</div>
    </nav>
    <br>
    <?php
      if(file_exists("scriptoutput/".$_SESSION['tfpfile']."_results.txt")==1 && filesize("scriptoutput/".$_SESSION['tfpfile']."_results.txt")!=0){ 
        $tfpread=fopen( "scriptoutput/".$_SESSION['tfpfile']."_results.txt" ,"r");
        $tfpoutread=fread($tfpread, filesize("scriptoutput/".$_SESSION['tfpfile']."_results.txt"));
        $tfplines=preg_split( "/[\n>]/", $tfpoutread);
        $tfplen=count($tfplines);
        echo "<div class='container'><div class='row'><div class='col-md-4' style='color: #1B4F72;'>HIT</div><div class='col-md-4' style='color:#b30000'>Query</div><div class='col-md-4' style='color:#804000'>HIT Sequence</div></div></div>";
        for($i=1; $i<$tfplen-1; $i++) {
        	echo "<div class='container'><hr><div class='row'><div class='col-md-4' style='color: #1B4F72;'>".$tfplines[$i]."</div><div class='col-md-4' style='color:#b30000'>".$tfplines[$i+1]."</div><div class='col-md-4' style='color:#804000'>".$tfplines[$i+2]."</div></div></div>";
        	$i=$i+3;
        }
    }
    ?>
    <br>
    <div class="container">
    	<div class="row">
    		<div class="col-md-12" style="text-align: center;">
    			<a style="background: #1B4F72; color: #ffffff; font-family: Times" class="btn btn-lg" role="button" href="<?php echo 'scriptoutput/'.$_SESSION['tfpfile'].'_results.txt'?>" download="<?php echo $_SESSION['tfpfile'].'_results.txt'?>">Download</a>
    		</div>	
		</div>
	</div>
	<br>
    <div class="container-fluid" id="footer">
    <div class="row">
      <div class="col-md-6" id="foot1">
        <h3> About Us</h3>
        <hr>
        <p>Re-MAP Server provides various options to annotate map and predict regulatory elements in terms of micro-RNA (miRNA), Transcription Factor Binding Sites (TFBS) and Simple Sequence Repeats (SSR). User can input single as well as multiple sequences at transcriptomics, genomics and proteomics level to predict and above stated regulatory elements. </p>
      </div>
      <div class="col-md-6" id="foot2">
        <h3>Contact Us</h3>
        <hr>
        <form method="post">
          <div class="form-group">
            <input type="text" name="Name" class="form-control" placeholder="Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="Email" class="form-control" placeholder="Email" required>
          </div>
          <div class="form-group">
            <textarea name="Message" class="form-control" placeholder="Message" rows="2" required></textarea>
          </div>
          <button class="btn btn-default btn-lg" id="sub1" name="mailSubmit"><span>SEND MESSAGE</span></button>
        </form>
        <?php
        if(isset($_POST["mailSubmit"])){
          $to = "freakbuster20@gmail.com";
          $subject = "Reg: REMAP Server";
          $body = $_POST["Message"];
          $headers = "From: ".$_POST["Email"];
          if(mail($to, $subject, $body, $headers)){
            echo "Mail sent successfully";
          }
          else{
            echo "Sorry! There was some error";
          }
        }
        ?>
      </div>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>  