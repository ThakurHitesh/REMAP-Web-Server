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
        <title>Tools</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script type="text/javascript" ></script>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
<style type="text/css">#msubmit:focus{
    outline:none;
    outline-offset: none;
    }
    #tssrsubmit:focus{
    outline:none;
    outline-offset: none;
    }
    #tsnpsubmit:focus{
    outline:none;
    outline-offset: none;
    }
    #tfpsubmit:focus{
    outline:none;
    outline-offset: none;
    }
    .button_loader {
    background-color: transparent;
    border: 4px solid #f3f3f3;
    border-radius: 50%;
    border-top: 4px solid #969696;
    border-bottom: 4px solid #969696;
    width: 35px;
    height: 35px;
    -webkit-animation: spin 0.8s linear infinite;
    animation: spin 0.8s linear infinite;
    }

    @-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    99% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
    0% { transform: rotate(0deg); }
    99% { transform: rotate(360deg); }
    }
    .nav-pills > li > a.active {
    background-color: #333857!important;
    color: #ffffff!important;
    }

    </style>
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
								<li class="nav-item active"><a class="nav-link" href="tools.php">Tools</a></li>
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
        <div class="container">
        <br>
          <ul class="nav nav-pills nav-justified" role="tablist">
            <li class="nav-item">
              <a style="border-radius: 0px; font-size: 20px;font-family: 'Aldrich'; color: grey;" class="nav-link" data-toggle="pill" href="#TmiRNA" >Micro RNA</a>
            </li>
            <li class="nav-item">
              <a style="border-radius: 0px; font-size: 20px;font-family: 'Aldrich';color: grey;" class="nav-link" data-toggle="pill" href="#Tssr" >SSR Prediction</a>
            </li>
            <!--<li class="nav-item">
              <a style="border-radius: 0px; font-size: 20px;font-family: 'Aldrich';color: grey;" class="nav-link" data-toggle="pill" href="#Ttf" >TFBS Prediction</a>
            </li>-->
            <li class="nav-item">
              <a style="border-radius: 0px; font-size: 20px;font-family: 'Aldrich';color: grey;" class="nav-link" data-toggle="pill" href="#Tsnp" >SNP Prediction</a>
            </li>
          </ul>
         <hr style="border-style: solid;border-width: 1px;border-color: #000000; margin: 0px;">
          <!-- Tab panes -->
        <div class="tab-content" id="Tcontent">
        <br>
        <br>
        <div class="tab-pane fadein active" id="TmiRNA">
          <h2 >Micro RNA Prediction</h2>
          <br>
          <form method="post" action="tools.php" enctype="multipart/form-data">
            <ul class="list-unstyled">
              <li>
                <?php
                $dir = "Databases/MIRNA/";
                $files = scandir($dir);
                ?>
                <div class="form-group"><label for="Tsel1" style="font-size: 19px;font-family: serif;">Database Type</label><select class="form-control" id="Tsel1" name="mselect" style='font-family:serif'>
                  <?php
                  $length = count($files);
                  for ($i=2 ; $i<$length ;$i++){
                  echo "<optgroup label='$files[$i]'>";  
                  $dirin=$dir.$files[$i]."/";
                  $filesin= scandir($dirin);
                  $lengthin=count($filesin);
                  for ($j=2 ; $j<$lengthin ;$j++){
                          $mtempo=$files[$i].'/'.$filesin[$j];
                          echo "<option value='".$mtempo."'>".$filesin[$j]."</option>";
                  }
                  }
                  ?>
                </select>
                </div>
              </li>
              <br>              
              <li>
                <div class="form-group">
                  <p style="font-family: serif;font-size: 19px; font-weight: normal;">Sequence/File</p>
                  <div class="row">
                  <div class="col-md-6"><input onclick="document.getElementById('mTinput').disabled = false; document.getElementById('mTchoose').disabled = true;" type="radio" name="type" checked><label for="mTinput" style="font-size: 16px">&nbsp; Input Sequence</label><textarea class="form-control" rows="5" placeholder="Enter the sequence in fasta format with header..." id="mTinput" name="mtext"></textarea>
              </div>
                  <div class="col-md-6"><input onclick="document.getElementById('mTinput').disabled = true; document.getElementById('mTchoose').disabled = false;" type="radio" name="type"><label for="mTchoose" style="font-size: 16px">&nbsp; Upload the file</label><br><input type="file"  id="mTchoose" disabled="true" name="mfile">
                </div>
                  </div>
                </div>
              </li>
              <?php
              $check=0;
              if(isset($_POST["msub"]) && (empty($_POST['mfile']) && isset($_POST['mtext']))){
                if(!empty($_POST["mtext"])){  
                $mlocation1="Uploads/Inputfile/";
                $mhandle1=fopen($mlocation1.$_SESSION['token']."Tempfile.fa","w");
                fwrite($mhandle1, $_POST["mtext"]);
                fclose($mhandle1);
                echo '<div class="alert alert-success">
                        <strong>Success!</strong> File uploaded (Hit RUN now)</a>.
                        </div>';
                $check=1;
                $_SESSION['infilepath1']=$mlocation1;
                $_SESSION['infilepath2']=$dir.$_POST["mselect"]."/".substr($_POST["mselect"],strpos($_POST["mselect"],"/")+1);
                $_SESSION['file']=$_SESSION['token']."Tempfile.fa";
                $_SESSION['condition']="input";
                }
                else{
                  echo '<div class="alert alert-warning">
                        <strong>Warning!</strong> Enter the sequence first</a>.
                        </div>';
                } 
              }
              if(isset($_POST["msub"]) && (empty($_POST["mtext"]) && !isset($_POST["mtext"]))){
              if(!empty($_FILES['mfile']['name'])){
              $mname=$_FILES['mfile']['name'];
              $msize=$_FILES['mfile']['size'];
              $mtype=$_FILES['mfile']['type'];
              $mtmp_name=$_FILES['mfile']['tmp_name'];
              $mlocation2="Uploads/Choosefile/";
              $mmax_size=8388608000;
              $extension=substr($mname,strpos($mname,".")+1);
              if($msize<=$mmax_size && ($extension=="fa" || $extension=="fasta") && $mtype=="application/octet-stream"){
                move_uploaded_file($mtmp_name, $mlocation2.$mname);
                echo '<div class="alert alert-success">
                        <strong>Success!</strong> File uploaded (Hit RUN now)</a>.
                        </div>';
                $check=1;
                $_SESSION['condition']="choose";
                $_SESSION['file']=$_SESSION['token'].$_FILES['mfile']['name'];
                $_SESSION['filepath1']="Uploads/Choosefile/".$_FILES['mfile']['name'];
                $_SESSION['filepath2']="Databases/MIRNA/".$_POST["mselect"];
                $_SESSION['filepath3']=substr($_POST["mselect"],strpos($_POST["mselect"],"/")+1);
              }
              else{
                  echo '<div class="alert alert-warning">
                        <strong>Warning!</strong> File should be less than 1000mb and must be fasta</a>.
                        </div>';
                }
              }
              else{
                  echo '<div class="alert alert-warning">
                        <strong>Warning!</strong> Select a fasta file first</a>.
                        </div>';
                }
            }
              ?>
              <li> 
                  <div class="row">
                  <div class="form-group col-md-6"><input type="submit" style="font-family: ariel;" value="Upload & Submit" name="msub" class="btn btn-md"></div>
                  <div class="col-md-6">
                  <div class="dropdown">
                    <button type="button" class="btn dropdown-toggle" style="background-color: #404040; color: #ffffff;" data-toggle="dropdown">
                      Sample Query Files Download
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="Sampleexamples/Sample for Arabidopsis thaliana.fa" download="Sample for Arabidopsis thaliana.fa">Arabidopsis thaliana [sample]</a>
                        <a class="dropdown-item" href="Sampleexamples/Sample for Drosophila melanogaster.fa" download="Sample for Drosophila melanogaster.fa">Drosophila melanogaster [sample]</a>
                        <a class="dropdown-item" href="Sampleexamples/Sample for Homo sapiens.fa" download="Sample for Homo sapiens.fa">Homo sapiens [sample]</a>
                        <a class="dropdown-item" href="Sampleexamples/Sample for Mus musculus.fa" download="Sample for Mus musculus.fa">Mus musculus [sample]</a>
                    </div>
                  </div>
                  </div>
                  </div>
                  <div class="form-group"><input style="font-family: ariel;" type="reset" value="Reset" class="btn btn-md"></div>
              </li>
            </ul>
          </form>
          <div class="form-group"><input type="button" id="<?php if($check==1){ echo "msubmit";} else echo ""; ?>" onclick="location.href='<?php if($check==1){ echo "mresult.php";} else echo "#"; ?>'" class=" btn btn-md" style="background: #333857;color: #ffffff;" value="RUN"/><span id="mJB" style="visibility: hidden; font-size: 24px; color: #1B4F72; font-variant-caps: small-caps; position: relative; top: 8px;">&nbsp;&nbsp;job running...</span></div>
          <script type="text/javascript">$('#msubmit').click(function(){
          document.getElementById("mJB").style.visibility="visible";   
          $(this).addClass('button_loader').attr("value","");
          window.setTimeout(function(){
          $('#msubmit').removeClass('button_loader').attr("value","\u2713");
          $('#msubmit').prop('disabled', true);
          },infinite);
          });</script>
        </div>
        




        <!--<div class="tab-pane fadein" id="Ttf">
          <h2>Transcription Factors Prediction</h2>
          <br>
          <form method="post" action="tools.php#Ttf" enctype="multipart/form-data">
            <ul class="list-unstyled">
              <li>-->
                <?php
                /*$tfpdir = "Databases/TFP/";
                $tfpfiles = scandir($tfpdir);
                ?>
                <div class="form-group"><label for="Tsel1" style="font-size: 19px;font-family: serif;">Database Type</label><select class="form-control" id="Tsel1" name="tfpselect">
                 <?php
                  $tfplength = count($tfpfiles);
                  for ($i=2 ; $i<$tfplength ;$i++){
                    echo "<option value=".$tfpfiles[$i].">". $tfpfiles[$i]."</option>";
                  }*/
                  ?>
                <!--</select>
                </div>
              </li>
              <br>              
              <li>
              <div class="form-group">
                  <p style="font-family: serif;font-size: 19px; font-weight: normal;">Sequence/File</p>
                  <div class="row">
                  <div class="col-md-6"><input onclick="document.getElementById('tfpTinput').disabled = false; document.getElementById('tfpTchoose').disabled = true;" type="radio" name="type" checked><label for="tfpTinput" style="font-size: 16px">&nbsp; Input Sequence</label><textarea class="form-control" rows="5" placeholder="Enter the sequence in fasta format with header..." id="tfpTinput" name="tfptext"></textarea>
              </div>
                  <div class="col-md-6"><input onclick="document.getElementById('tfpTinput').disabled = true; document.getElementById('tfpTchoose').disabled = false;" type="radio" name="type"><label for="tfpTchoose" style="font-size: 16px">&nbsp; Upload the file</label><br><input type="file"  id="tfpTchoose" disabled="true" name="tfpfile">
                </div>
                  </div>
                </div>
              </li>-->
              <?php
                /*$tfpcheck=0;
                if(isset($_POST["tfpsub"]) && (empty($_POST['tfpfile']) && isset($_POST['tfptext']))){
                  if(!empty($_POST["tfptext"])){  
                    $tfplocation1="Uploads/Inputfile/";
                    $tfphandle1=fopen($tfplocation1."Tempfile.fa","w");
                    fwrite($tfphandle1, $_POST["tfptext"]);
                    fclose($tfphandle1);
                    echo "Uploaded";
                    $tfpcheck=1;
                    $_SESSION['tfpinfilepath1']=$tfplocation1;
                    $_SESSION['tfpinfilepath2']=$tfpdir.$_POST["tfpselect"]."/".$_POST["tfpselect"];
                    $_SESSION['tfpfile']="Tempfile.fa";
                    $_SESSION['tfpcondition']="input";
                    }
                  else{
                    echo "<p style='color:#991f00;'><span class='glyphicon glyphicon-exclamation-sign'></span> Enter the sequence</p>";
                  } 
              }
              if(isset($_POST["tfpsub"]) && (empty($_POST["tfptext"]) && !isset($_POST["tfptext"]))){
              if(!empty($_FILES['tfpfile']['name'])){
              $tfpname=$_FILES['tfpfile']['name'];
              $tfpsize=$_FILES['tfpfile']['size'];
              $tfptype=$_FILES['tfpfile']['type'];
              $tfptmp_name=$_FILES['tfpfile']['tmp_name'];
              $tfplocation2="Uploads/Choosefile/";
              $tfpmax_size=4194304;
              $tfpextension=substr($tfpname,strpos($tfpname,".")+1);
              if($tfpsize<=$tfpmax_size && $tfpextension=="fa" && $tfptype=="application/octet-stream"){
                move_uploaded_file($tfptmp_name, $tfplocation2.$tfpname);
                echo "File Uploaded";
                $tfpcheck=1;
                $_SESSION['tfpcondition']="choose";
                $_SESSION['tfpfile']=$_FILES['tfpfile']['name'];
                $_SESSION['tfpfilepath1']="Uploads/Choosefile/".$_FILES['tfpfile']['name'];
                $_SESSION['tfpfilepath2']="Databases/TFP/".$_POST["tfpselect"];
                $_SESSION['tfpfilepath3']=$_POST["tfpselect"];
              }
              else{ 
                echo "<p style='color:#991f00;'><span class='glyphicon glyphicon-exclamation-sign'></span> File should be less than 5mb and should be fasta</p>";
              }
              }
              else{
                  echo "<p style='color:#991f00;'><span class='glyphicon glyphicon-exclamation-sign'></span> Choose a file</p>";
                }
            }*/
              ?>
              <!--<li>
                  <div class="form-group"><input type="submit" style="font-family: ariel;"value="Upload & Submit" name="tfpsub" class="btn btn-md"></div>
                  <div class="form-group"><input type="reset" style="font-family: ariel;" value="Reset" class="btn btn-md"></div>
              </li>
            </ul>
          </form>-->
          <!--<div class="form-group"><input type="button" id="<?php //if($tfpcheck==1){ echo "tfpsubmit";} else echo ""; ?>" onclick="location.href='<?php //if($tfpcheck==1){ echo "tfpresult.php";} else echo "#"; ?>'" class=" btn btn-md" style="background: #333857;color: #ffffff;" value="RUN"/><span id="tfpJB" style="visibility: hidden; font-size: 24px; color: #1B4F72; font-variant-caps: small-caps; position: relative; top: 8px;">&nbsp;&nbsp;job running...</span></div>
          <script type="text/javascript">$('#tfpsubmit').click(function(){
          document.getElementById("tfpJB").style.visibility="visible";   
          $(this).addClass('button_loader').attr("value","");
          window.setTimeout(function(){
          $('#tfpsubmit').removeClass('button_loader').attr("value","\u2713");
          $('#tfpsubmit').prop('disabled', true);
          },infinite);
          });</script>
        </div>-->







        <div class="tab-pane fadein" id="Tssr">
          <h2>Simple Sequence Repeats Prediction</h2>
          <br>
          <form method="post" action="tools.php#Tssr" enctype="multipart/form-data">
            <ul class="list-unstyled">            
              <li>
              <div class="form-group">
                  <p style="font-family: serif;font-size: 19px; font-weight: normal;">Sequence/File</p>
                  <div class="row">
                  <div class="col-md-6"><input onclick="document.getElementById('tssrTinput').disabled = false; document.getElementById('tssrTchoose').disabled = true;" type="radio" name="type" checked><label for="tssrTinput" style="font-size: 16px">&nbsp;Input Sequence</label><textarea class="form-control" rows="5" placeholder="Enter the sequence in fasta format with header..." id="tssrTinput" name="tssrtext"></textarea>
              </div>
                  <div class="col-md-6"><input onclick="document.getElementById('tssrTinput').disabled = true; document.getElementById('tssrTchoose').disabled = false;" type="radio" name="type"><label for="tssrTchoose" style="font-size: 16px">&nbsp;Upload the file</label><br><input type="file"  id="tssrTchoose" disabled="true" name="tssrfile">
                </div>
                  </div>
                </div>
              </li>
              <?php
              $tssrcheck=0;  
              if(isset($_POST["tssrsub"]) && (empty($_POST['tssrfile']) && isset($_POST['tssrtext']))){
                if(!empty($_POST["tssrtext"])){  
                $tssrlocation1="Uploads/Inputfile/";
                $tssrhandle1=fopen($tssrlocation1.$_SESSION['token']."Tempfile.fa","w");
                fwrite($tssrhandle1, $_POST["tssrtext"]);
                fclose($tssrhandle1);
                echo '<div class="alert alert-success">
                        <strong>Success!</strong> File uploaded (Hit RUN now)</a>.
                        </div>';
                $tssrcheck=1;
                $_SESSION['tssrinfilepath1']=$tssrlocation1;
                $_SESSION['tssrfile']=$_SESSION['token']."Tempfile.fa";
                $_SESSION['tssrcondition']="input";
                }
                else{
                  echo '<div class="alert alert-warning">
                        <strong>Warning!</strong> Enter the sequence first</a>.
                        </div>';
                } 
              }
              if(isset($_POST["tssrsub"]) && (empty($_POST["tssrtext"]) && !isset($_POST["tssrtext"]))){
              if(!empty($_FILES['tssrfile']['name'])){
              $tssrname=$_FILES['tssrfile']['name'];
              $tssrsize=$_FILES['tssrfile']['size'];
              $tssrtype=$_FILES['tssrfile']['type'];
              $tssrtmp_name=$_FILES['tssrfile']['tmp_name'];
              $tssrlocation2="Uploads/Choosefile/";
              $tssrmax_size=8388608000;
              $tssrextension=substr($tssrname,strpos($tssrname,".")+1);
              if($tssrsize<=$tssrmax_size && ($tssrextension=="fa" || $tssrextension=="fasta") && $tssrtype=="application/octet-stream"){
                move_uploaded_file($tssrtmp_name, $tssrlocation2.$tssrname);
                echo '<div class="alert alert-success">
                        <strong>Success!</strong> File uploaded (Hit RUN now)</a>.
                        </div>';
                $tssrcheck=1;
                $_SESSION['tssrcondition']="choose";
                $_SESSION['tssrfile']=$_SESSION['token'].$_FILES['tssrfile']['name'];
                $_SESSION['tssrfilepath1']="Uploads/Choosefile/".$_FILES['tssrfile']['name'];
              }
              else{ 
                echo '<div class="alert alert-warning">
                        <strong>Warning!</strong> File should be less than 1000mb and must be fasta</a>.
                        </div>';
              }
              }
              else{
                  echo '<div class="alert alert-warning">
                        <strong>Warning!</strong> Select a fasta file first</a>.
                        </div>';
                }
            }
              ?>
              <li>
                  <div class="form-group"><input type="submit" style="font-family: ariel;" value="Upload & Submit" name="tssrsub" class="btn btn-md"></div>
                  <div class="form-group"><input type="reset" style="font-family: ariel;  " value="Reset" class="btn btn-md"></div>
              </li>
            </ul>
          </form>
          <div class="form-group"><input type="button" id="<?php if($tssrcheck==1){ echo "tssrsubmit";} else echo ""; ?>" onclick="location.href='<?php if($tssrcheck==1){ echo "tssrresult.php";} else echo "#"; ?>'" class=" btn btn-md" style="background: #333857;color: #ffffff;" value="RUN"/><span id="tssrJB" style="visibility: hidden; font-size: 24px; color: #1B4F72; font-variant-caps: small-caps; position: relative; top: 8px;">&nbsp;&nbsp;job running...</span></div>
          <script type="text/javascript">$('#tssrsubmit').click(function(){
          document.getElementById("tssrJB").style.visibility="visible";   
          $(this).addClass('button_loader').attr("value","");
          window.setTimeout(function(){
          $('#tssrsubmit').removeClass('button_loader').attr("value","\u2713");
          $('#tssrsubmit').prop('disabled', true);
          },infinite);
          });</script>
        </div> 






        <div class="tab-pane fadein" id="Tsnp">
          <h2>Single Nucleotide Polymorphism Prediction</h2>
          <br>
          <form method="post" action="tools.php#Tsnp" enctype="multipart/form-data">
            <ul class="list-unstyled">            
              <li>
              <div class="form-group">
                  <p style="font-family: serif;font-size: 19px; font-weight: normal;">Sequence/File</p>
                  <div class="row">
                  <div class="col-md-6"><input onclick="document.getElementById('tsnpTinput').disabled = false; document.getElementById('tsnpTchoose').disabled = true;" type="radio" name="type" checked><label for="tsnpTinput" style="font-size: 16px">&nbsp;Input Sequence</label><textarea class="form-control" rows="5" placeholder="Enter the sequence in fasta format with header..." id="tsnpTinput" name="tsnptext"></textarea>
              </div>
                  <div class="col-md-6"><input onclick="document.getElementById('tsnpTinput').disabled = true; document.getElementById('tsnpTchoose').disabled = false;" type="radio" name="type"><label for="tsnpTchoose" style="font-size: 16px">&nbsp;Upload the file</label><br><input type="file"  id="tsnpTchoose" disabled="true" name="tsnpfile">
                </div>
                  </div>
                </div>
              </li>
              <?php
              $tsnpcheck=0;  
              if(isset($_POST["tsnpsub"]) && (empty($_POST['tsnpfile']) && isset($_POST['tsnptext']))){
                if(!empty($_POST["tsnptext"])){  
                $tsnplocation1="Uploads/Inputfile/";
                $tsnphandle1=fopen($tsnplocation1.$_SESSION['token']."Tempfile.fa","w");
                fwrite($tsnphandle1, $_POST["tsnptext"]);
                fclose($tsnphandle1);
                echo '<div class="alert alert-success">
                        <strong>Success!</strong> File uploaded (Hit RUN now)</a>.
                        </div>';
                $tsnpcheck=1;
                $_SESSION['tsnpinfilepath1']=$tsnplocation1;
                $_SESSION['tsnpfile']=$_SESSION['token']."Tempfile.fa";
                $_SESSION['tsnpcondition']="input";
                }
                else{
                  echo '<div class="alert alert-warning">
                        <strong>Warning!</strong> Enter the sequence first</a>.
                        </div>';
                } 
              }
              if(isset($_POST["tsnpsub"]) && (empty($_POST["tsnptext"]) && !isset($_POST["tsnptext"]))){
              if(!empty($_FILES['tsnpfile']['name'])){
              $tsnpname=$_FILES['tsnpfile']['name'];
              $tsnpsize=$_FILES['tsnpfile']['size'];
              $tsnptype=$_FILES['tsnpfile']['type'];
              $tsnptmp_name=$_FILES['tsnpfile']['tmp_name'];
              $tsnplocation2="Uploads/Choosefile/";
              $tsnpmax_size=8388608000;
              $tsnpextension=substr($tsnpname,strpos($tsnpname,".")+1);
              if($tsnpsize<=$tsnpmax_size && ($tsnpextension=="fa" || $tsnpextension=="fasta")&& $tsnptype=="application/octet-stream"){
                move_uploaded_file($tsnptmp_name, $tsnplocation2.$tsnpname);
                echo '<div class="alert alert-success">
                        <strong>Success!</strong> File uploaded (Hit RUN now)</a>.
                        </div>';
                $tsnpcheck=1;
                $_SESSION['tsnpcondition']="choose";
                $_SESSION['tsnpfile']=$_SESSION['token'].$_FILES['tsnpfile']['name'];
                $_SESSION['tsnpfilepath1']="Uploads/Choosefile/".$_FILES['tsnpfile']['name'];
              }
              else{ 
                echo '<div class="alert alert-warning">
                        <strong>Warning!</strong> File should be less than 1000mb and must be fasta</a>.
                        </div>';
              }
              }
              else{
                  echo '<div class="alert alert-warning">
                        <strong>Warning!</strong> Select a fasta file first</a>.
                        </div>';
                }
            }
              ?>
              <li>
                  <div class="form-group"><input type="submit" style="font-family: ariel;" value="Upload & Submit" name="tsnpsub" class="btn btn-md"></div>
                  <div class="form-group"><input type="reset" style="font-family: ariel;  " value="Reset" class="btn btn-md"></div>
              </li>
            </ul>
          </form>
          <div class="form-group"><input type="button" id="<?php if($tsnpcheck==1){ echo "tsnpsubmit";} else echo ""; ?>" onclick="location.href='<?php if($tsnpcheck==1){ echo "tsnpresult.php";} else echo "#"; ?>'" class=" btn btn-md" style="background: #333857;color: #ffffff;" value="RUN"/><span id="tsnpJB" style="visibility: hidden; font-size: 24px; color: #1B4F72; font-variant-caps: small-caps; position: relative; top: 8px;">&nbsp;&nbsp;job running...</span></div>
          <script type="text/javascript">$('#tsnpsubmit').click(function(){
          document.getElementById("tsnpJB").style.visibility="visible";   
          $(this).addClass('button_loader').attr("value","");
          window.setTimeout(function(){
          $('#tsnpsubmit').removeClass('button_loader').attr("value","\u2713");
          $('#tsnpsubmit').prop('disabled', true);
          },infinite);
          });</script>
        </div>





        </div>
        </div>
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
    <script>
            $(function () {
                var hash = window.location.hash;
                hash && $('ul.nav a[href="' + hash + '"]').tab('show');
            });
        </script>
    </body>
</html>