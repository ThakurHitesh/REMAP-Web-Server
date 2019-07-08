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
        <title>Basic Utility</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
    <style type="text/css">
          .zoom {
          transition: transform .2s; /* Animation */
          }

          .zoom:hover {
            transform: scale(1.05); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
          }
          #orftable {
              table-layout: fixed;
              word-wrap: break-word;
            }
          #sstable {
              table-layout: fixed;
              word-wrap: break-word;
            }  
        @media (min-width: 768px) {
        .modal-xl {
            width: 90%;
            max-width:1200px;
            }
        }
        .modal p {
            word-wrap: break-word;
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
    </style> 





<style type="text/css">
    .product-slider { padding: 45px; }

    .product-slider #carousel { border: 4px solid #1089c0; margin: 0; }

    .product-slider #thumbcarousel { margin: 12px 0 0; padding: 0 45px; }

    .product-slider #thumbcarousel .item { text-align: center; }

    .product-slider #thumbcarousel .item .thumb { border: 4px solid #cecece; width: 20%; margin: 0 2%; display: inline-block; vertical-align: middle; cursor: pointer; max-width: 98px; }

    .product-slider #thumbcarousel .item .thumb:hover { border-color: #1089c0; }

    .product-slider .item img { width: 100%; height: auto; }

    .carousel-control { color: #0284b8; text-align: center; text-shadow: none; font-size: 30px; width: 30px; height: 30px; line-height: 20px; top: 23%; }

    .carousel-control:hover, .carousel-control:focus, .carousel-control:active { color: #333; }

    .carousel-caption, .carousel-control .fa { font: normal normal normal 30px/26px FontAwesome; }
    .carousel-control { background-color: rgba(0, 0, 0, 0); bottom: auto; font-size: 20px; left: 0; position: absolute; top: 30%; width: auto; }

    .carousel-control.right, .carousel-control.left { background-color: rgba(0, 0, 0, 0); background-image: none; }


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
								<li class="nav-item"><a class="nav-link" href="tools.php">Tools</a></li>
                <li class="nav-item active"><a class="nav-link" href="basicmodule.php">Basic Utility</a></li>
								<li class="nav-item"><a class="nav-link" href="about-us.php">About</a></li> 
								<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <div class="container-fluid">
          <br>
          <h2 align="center">Sequence Analysis</h2>
          <br>
          






<div class="product-slider" style="margin-left: 7%;margin-right: 7%;" >
  <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false" style="border-color: #ffffff">
    <div class="carousel-inner">
      <div class="carousel-item active" id="mod2"> 
      <div id="cont2">
            <div class="card">
              <div class="card-header" style="height: 50px;background-color:#404040"><h4 style="color: #ffffff">Dna to Protein</h4></div>
              <div class="card-body">
                
        <div class="container-fluid" style="margin-top: 5%;margin-bottom: 5%">
          <div class="row donation_inner">
                <div class="col-lg-4">
              <div class="dontation_item zoom" style="background-color: #ffffff"> 
                <div class="media">
                  <div class="media-body" style="color: rgb(219, 57, 78)">
                    <h4>Translation</h4>
                    <p>Tool designed to translate dna into protein</p>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-lg-7">
              <form method="post" action="basicmodule.php" enctype="multipart/form-data">
                                                      <div style="margin-top: 5%;margin-bottom: 5%">
                                                      <h6 style="font-weight: bold;font-family: sans-serif;">Upload single sequence fasta file :</h6>
                                                      <input type="file" name="verifytrn" class="btn">
                                                      </div>
                                                      <div style="margin-top: 5%;margin-bottom: 5%">
                                                      <h6 style="font-weight: bold;font-family: sans-serif;">Genetic Code :</h6>
                                                      <select class="form-control" id="genetic_code" name="genetic_code">
                                                        <option value="SC">Standard Code</option>
                                                        <option value="VM">Vertebrate Mitochondrial Code</option>
                                                        <option value="YM">Yeast Mitochondrial Code</option>
                                                        <option value="MPCMS">Mold, Protozoan, Coelenterate Mitochondrial and Mycoplasma Code</option>
                                                        <option value="IM">Invertebrate Mitochondrial Code</option>
                                                        <option value="CDH">Ciliate, Dasycladacean and Hexamita Nuclear Code</option>
                                                        <option value="EF">Echinoderm and Flatworm Mitochondrial Code</option>
                                                        <option value="EN">Euplotid Nuclear Code</option>
                                                        <option value="BA">Bacterial, Archaeal and Plant Plastid Code</option>
                                                        <option value="AYN">Alternative Yeast Nuclear Code</option>
                                                        <option value="AM">Ascidian Mitochondrial Code</option>
                                                        <option value="AFM">Alternative Flatworm Mitochondrial Code</option>
                                                        <option value="BM">Blepharisma Nuclear Code</option>
                                                        <option value="CM">Chlorophycean Mitochondrial Code</option>
                                                        <option value="TM">Trematode Mitochondrial Code</option>
                                                        <option value="SOM">Scenedesmus Obliquus Mitochondrial Code</option>
                                                        <option value="THM">Thraustochytrium Mitochondrial Code</option>
                                                        <option value="PM">Pterobranchia Mitochondrial Code</option>
                                                        <option value="CDSG">Candidate Division SR1 and Gracilibacteria Code</option>
                                                        <option value="PTN">Pachysolen Tannophilus Nuclear Code</option>
                                                        <option value="MN">Mesodinium Nuclear Code</option>
                                                        <option value="PN"> Peritrich Nuclear Code</option>
                                                      </select>
                                                      </div>
                                                      <input type="submit" class="btn btn-danger" name="trninp" value="Upload" id="trnupload">
                                                      <input type="button" class="btn btn-danger btn-md" style="color: #ffffff;background-color: #404040;height: 40px" data-toggle="modal" data-target="#myModal2" value="RUN"/>
                                                    
                                                    <?php 
                                                    $check2=0;
                                                    if(isset($_POST['trninp']) && empty($_POST['verifytrn'])){
                                                      if(!empty($_FILES['verifytrn']['name'])){
                                                          $trnname=$_FILES['verifytrn']['name'];
                                                          $trnsize=$_FILES['verifytrn']['size'];
                                                          $trntype=$_FILES['verifytrn']['type'];
                                                          $trntmp_name=$_FILES['verifytrn']['tmp_name'];
                                                          $trnlocation="basicutility/UploadBU/";
                                                          $trnmax_size=8388608000;
                                                          $extension=substr($trnname,strpos($trnname,".")+1);
                                                          $genecode = $_POST['genetic_code'];
                                                          if($trnsize<=$trnmax_size && ($extension=="fa" || $extension=="fasta") && $trntype=="application/octet-stream"){
                                                            move_uploaded_file($trntmp_name, $trnlocation.$trnname);
                                                            echo '<span class="alert alert-success">
                                                                    <strong>Success!</strong> File uploaded (Hit RUN now)</a>.
                                                                    </span>';
                                                            $check2=1;
                                                            $_SESSION['trnfile']=$_FILES['verifytrn']['name'];
                                                            $_SESSION['trnfilepath']="basicutility/UploadBU/".$_FILES['verifytrn']['name'];
                                                            }
                                                          else{
                                                            echo '<span class="alert alert-warning">
                                                                  <strong>Warning!</strong> File must be fasta</a>.
                                                                  </span>';
                                                            }
                                                        }
                                                        else{
                                                            echo '<span class="alert alert-warning">
                                                                  <strong>Warning!</strong> Select a fasta file first</a>.
                                                                  </span>';
                                                          }
                                                      }    
                                                    ?>
                                                    </form>
                                                    
              </div>
              </div>
              </div>
              </div>
              </div>
              </div> 

           </div>
      <div class="carousel-item">
        <div id="cont3">
            <div class="card">
              <div class="card-header" style="height: 50px;background-color:#404040"><h4 style="color: #ffffff">Consensus sequence</h4></div>
              <div class="card-body">
                
        <div class="container-fluid" style="margin-top: 5%;margin-bottom: 5%" >
          <div class="row donation_inner">
                <div class="col-lg-4" style="margin-top: 3.85%;margin-bottom: 4%">
              <div class="dontation_item zoom" style="background-color: #ffffff"> 
                <div class="media">
                  <div class="media-body" style="color: rgb(219, 57, 78)">
                    <h4>Consensus</h4>
                    <p>Tool designed to generate a consensus from a fasta alignment</p>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-lg-8" style="margin-top: 3.85%;margin-bottom: 4%">
              <form method="post" action="basicmodule.php" enctype="multipart/form-data" style="margin-left: 20%">
                                                      <div style="margin-top: 5%;margin-bottom: 5%">
                                                      <h6 style="font-weight: bold;font-family: sans-serif;">Upload multi sequence fasta file :</h6>
                                                      <input type="file" name="verifycon" class="btn">
                                                      </div>
                                                      <input type="submit" class="btn btn-danger" name="coninp" value="Upload" id="conupload">
                                                      <input type="button" class="btn btn-danger btn-md" style="color: #ffffff;background-color: #404040;height: 40px" data-toggle="modal" data-target="#myModal3" value="RUN"/>
    
                                                    
                                                    <?php 
                                                    $check3=0;
                                                    if(isset($_POST['coninp']) && empty($_POST['verifycon'])){
                                                      if(!empty($_FILES['verifycon']['name'])){
                                                          $conname=$_FILES['verifycon']['name'];
                                                          $consize=$_FILES['verifycon']['size'];
                                                          $contype=$_FILES['verifycon']['type'];
                                                          $contmp_name=$_FILES['verifycon']['tmp_name'];
                                                          $conlocation="basicutility/UploadBU/";
                                                          $conmax_size=8388608000;
                                                          $extension=substr($conname,strpos($conname,".")+1);
                                                          if($consize<=$conmax_size && ($extension=="fa" || $extension=="fasta") && $contype=="application/octet-stream"){
                                                            move_uploaded_file($contmp_name, $conlocation.$conname);
                                                            echo '<span class="alert alert-success">
                                                                    <strong>Success!</strong> File uploaded (Hit RUN now)</a>.
                                                                    </span>';
                                                            $check3=1;
                                                            $_SESSION['confile']=$_FILES['verifycon']['name'];
                                                            $_SESSION['confilepath']="basicutility/UploadBU/".$_FILES['verifycon']['name'];
                                                            }
                                                          else{
                                                            echo '<span class="alert alert-warning">
                                                                  <strong>Warning!</strong> File must be fasta</a>.
                                                                  </span>';
                                                            }
                                                        }
                                                        else{
                                                            echo '<span class="alert alert-warning">
                                                                  <strong>Warning!</strong> Select a fasta file first</a>.
                                                                  </span>';
                                                          }
                                                      }    
                                                    ?>
                                                    </form>
                                                    
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
      <div class="carousel-item"> 
      <div id ="cont4">
            <div class="card">
              <div class="card-header" style="height: 50px;background-color:#404040"><h4 style="color: #ffffff">ORF Finder</h4></div>
              <div class="card-body">
                
        <div class="container-fluid" style="margin-top: 5%;margin-bottom: 5%" >
          <div class="row donation_inner">
                <div class="col-lg-4" style="margin-top: 0.4%;margin-bottom: 0.9%">
              <div class="dontation_item zoom" style="background-color: #ffffff"> 
                <div class="media">
                  <div class="media-body" style="color: rgb(219, 57, 78)">
                    <h4>ORF Finder</h4>
                    <p>Examine a nucleotide sequence and identify the ORFs in the sequence</p>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-lg-8" style="margin-top: 0.4%;margin-bottom: 0.9%">
              <form method="post" action="basicmodule.php" enctype="multipart/form-data" style="margin-left: 20%">
                                                      <div style="margin-top: 5%;margin-bottom: 5%" >
                                                      <h6 style="font-weight: bold;font-family: sans-serif;">Upload single sequence fasta file :</h6>
                                                      <input type="file" name="verifyorf" class="btn">
                                                      </div>
                                                      <div style="margin-top: 5%;margin-bottom: 5%" >
                                                      <h6 style="font-weight: bold;font-family: sans-serif;">Minimum ORF length :</h6>
                                                      <input type="number" name="orfminlen" min="6">  
                                                      </div>
                                                      
                                                      <input type="submit" class="btn btn-danger" name="orfinp" value="Upload" id="orfupload">
                                                      <input type="button" class="btn btn-danger btn-md" style="color: #ffffff;background-color: #404040;height: 40px" data-toggle="modal" data-target="#myModal4" value="RUN"/>

                                                    
                                                    <?php 
                                                    $check4=0;
                                                    if(isset($_POST['orfinp']) && empty($_POST['verifyorf']) && isset($_POST['orfminlen'])){
                                                      if(!empty($_FILES['verifyorf']['name']) && !empty($_POST['orfminlen'])){
                                                          $orfname=$_FILES['verifyorf']['name'];
                                                          $orfsize=$_FILES['verifyorf']['size'];
                                                          $orftype=$_FILES['verifyorf']['type'];
                                                          $orftmp_name=$_FILES['verifyorf']['tmp_name'];
                                                          $orflocation="basicutility/UploadBU/";
                                                          $orfmax_size=8388608000;
                                                          $extension=substr($orfname,strpos($orfname,".")+1);
                                                          if($orfsize<=$orfmax_size && ($extension=="fa" || $extension=="fasta") && $orftype=="application/octet-stream"){
                                                            move_uploaded_file($orftmp_name, $orflocation.$orfname);
                                                            $orflen = $_POST['orfminlen'];
                                                            echo '<span class="alert alert-success">
                                                                    <strong>Success!</strong> File uploaded (Hit RUN now)</a>.
                                                                    </span>';
                                                            $check4=1;
                                                            $_SESSION['orffile']=$_FILES['verifyorf']['name'];
                                                            $_SESSION['orffilepath']="basicutility/UploadBU/".$_FILES['verifyorf']['name'];
                                                            }
                                                          else{
                                                            echo '<span class="alert alert-warning">
                                                                  <strong>Warning!</strong> File must be fasta</a>.
                                                                  </span>';
                                                            }
                                                        }
                                                        else{
                                                            echo '<span class="alert alert-warning">
                                                                  <strong>Warning!</strong> Select a fasta file first and specify minimum length of ORF</a>.
                                                                  </span>';
                                                          }
                                                      }    
                                                    ?>
                                                    </form>                            
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
      <div class="carousel-item">
        <div id="cont5">
            <div class="card">
              <div class="card-header" style="height: 50px;background-color:#404040"><h4 style="color: #ffffff">Sequence Summary</h4></div>
              <div class="card-body">
                
        <div class="container-fluid" style="margin-top: 5%;margin-bottom: 5%" >
          <div class="row donation_inner">
                <div class="col-lg-4" style="margin-top: 3.9%;margin-bottom: 4%">
              <div class="dontation_item zoom" style="background-color: #ffffff"> 
                <div class="media">
                  <div class="media-body" style="color: rgb(219, 57, 78)">
                    <h4>SEQUENCE SUMMARY</h4>
                    <p>Tool designed to provide length, A:T:G:C:N count, GC content and AT content of the sequence.</p>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-lg-8" style="margin-top: 3.9%;margin-bottom: 4%">
              <form method="post" action="basicmodule.php" enctype="multipart/form-data" style="margin-left: 20%">
                                                      <div style="margin-top: 5%;margin-bottom: 5%">
                                                      <h6 style="font-weight: bold;font-family: sans-serif;">Upload multi/single sequence(s) fasta file :</h6>
                                                      <input type="file" name="verifyss" class="btn">
                                                      </div>
                                                      <input type="submit" class="btn btn-danger" name="ssinp" value="Upload" id="ssupload">
                                                      <input type="button" class="btn btn-danger btn-md" style="color: #ffffff;background-color: #404040;height: 40px" data-toggle="modal" data-target="#myModal5" value="RUN"/>
                                                    
                                                    <?php 
                                                    $check5=0;
                                                    if(isset($_POST['ssinp']) && empty($_POST['verifyss'])){
                                                      if(!empty($_FILES['verifyss']['name'])){
                                                          $ssname=$_FILES['verifyss']['name'];
                                                          $sssize=$_FILES['verifyss']['size'];
                                                          $sstype=$_FILES['verifyss']['type'];
                                                          $sstmp_name=$_FILES['verifyss']['tmp_name'];
                                                          $sslocation="basicutility/UploadBU/";
                                                          $ssmax_size=8388608000;
                                                          $extension=substr($ssname,strpos($ssname,".")+1);
                                                          if($sssize<=$ssmax_size && ($extension=="fa" || $extension=="fasta") && $sstype=="application/octet-stream"){
                                                            move_uploaded_file($sstmp_name, $sslocation.$ssname);
                                                            echo '<span class="alert alert-success">
                                                                    <strong>Success!</strong> File uploaded (Hit RUN now)</a>.
                                                                    </span>';
                                                            $check5=1;
                                                            $_SESSION['ssfile']=$_FILES['verifyss']['name'];
                                                            $_SESSION['ssfilepath']="basicutility/UploadBU/".$_FILES['verifyss']['name'];
                                                            }
                                                          else{
                                                            echo '<span class="alert alert-warning">
                                                                  <strong>Warning!</strong> File must be fasta</a>.
                                                                  </span>';
                                                            }
                                                        }
                                                        else{
                                                            echo '<span class="alert alert-warning">
                                                                  <strong>Warning!</strong> Select a fasta file first</a>.
                                                                  </span>';
                                                          }
                                                      }    
                                                    ?>
                                                    </form>
                                                    
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
      <div class="carousel-item" id="mod6"> 
      <div id="cont6">
            <div class="card">
              <div class="card-header" style="height: 50px;background-color:#404040"><h4 style="color: #ffffff">Find K-mers</h4></div>
              <div class="card-body">
                
        <div class="container-fluid" style="margin-top: 5%;margin-bottom: 5%" >
          <div class="row donation_inner">
              <div class="col-lg-4" style="margin-top: 0.5%;margin-bottom: 0.8%">
              <div class="dontation_item zoom" style="background-color: #ffffff"> 
                <div class="media">
                  <div class="media-body" style="color: rgb(219, 57, 78)">
                    <h4>FIND K-mers</h4>
                    <p>Tool designed to find all the k-mers from a fasta file containing multiple nucleotide sequences</p>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-lg-8" style="margin-top: 0.5%;margin-bottom: 0.8%">
              <form method="post" action="basicmodule.php" enctype="multipart/form-data" style="margin-left: 20%">
                                                      <div style="margin-top: 5%;margin-bottom: 5%">
                                                      <h6 style="font-weight: bold;font-family: sans-serif;">Upload multi sequence fasta file :</h6>
                                                      <input type="file" name="verifyfk" class="btn">
                                                      </div>
                                                      <div style="margin-top: 5%;margin-bottom: 5%">
                                                      <h6 style="font-weight: bold;font-family: sans-serif;">Length of K-mer :</h6>
                                                      <input type="number" name="numberfk" min="1">
                                                      </div>
                                                      <input type="submit" class="btn btn-danger" name="fkinp" value="Upload" id="fkupload">
                                                      <input type="button" class="btn btn-danger btn-md" style="color: #ffffff;background-color: #404040;height: 40px" data-toggle="modal" data-target="#myModal6" value="RUN"/>
                                                    
                                                    <?php 
                                                    $check6=0;
                                                    if(isset($_POST['fkinp']) && empty($_POST['verifyfk']) && isset($_POST['numberfk'])){
                                                      if(!empty($_FILES['verifyfk']['name']) && !empty($_POST['numberfk'])){
                                                          $kmer=$_POST['numberfk'];
                                                          $fkname=$_FILES['verifyfk']['name'];
                                                          $fksize=$_FILES['verifyfk']['size'];
                                                          $fktype=$_FILES['verifyfk']['type'];
                                                          $fktmp_name=$_FILES['verifyfk']['tmp_name'];
                                                          $fklocation="basicutility/UploadBU/";
                                                          $fkmax_size=8388608000;
                                                          $extension=substr($fkname,strpos($fkname,".")+1);
                                                          if($fksize<=$fkmax_size && ($extension=="fa" || $extension=="fasta") && $fktype=="application/octet-stream"){
                                                            move_uploaded_file($fktmp_name, $fklocation.$fkname);
                                                            echo '<span class="alert alert-success">
                                                                    <strong>Success!</strong> File uploaded (Hit RUN now)</a>.
                                                                    </span>';
                                                            $check6=1;
                                                            $_SESSION['fkfile']=$_FILES['verifyfk']['name'];
                                                            $_SESSION['fkfilepath']="basicutility/UploadBU/".$_FILES['verifyfk']['name'];
                                                            }
                                                          else{
                                                            echo '<span class="alert alert-warning">
                                                                  <strong>Warning!</strong> File must be fasta</a>.
                                                                  </span>';
                                                            }
                                                        }
                                                        else{
                                                            echo '<span class="alert alert-warning">
                                                                  <strong>Warning!</strong> Select a fasta file first and make sure kmer length is specified</a>.
                                                                  </span>';
                                                          }
                                                      }    
                                                    ?>
                                                    </form>
                                                    
                    </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
  <div class="carousel-item" id="mod7"> 
      <div id="cont7">
            <div class="card">
              <div class="card-header" style="height: 50px;background-color:#404040"><h4 style="color: #ffffff">CAI-Calculator</h4></div>
              <div class="card-body">
                
        <div class="container-fluid" style="margin-top: 5%;margin-bottom: 5%" >
          <div class="row donation_inner">
              <div class="col-lg-4" style="margin-top: 0.2%;margin-bottom: 0.1%">
              <div class="dontation_item zoom" style="background-color: #ffffff"> 
                <div class="media">
                  <div class="media-body" style="color: rgb(219, 57, 78)">
                    <h4>CODON ADAPTATION INDEX</h4>
                    <p>CAI (Codon Adaptation Index) is an effective measure of synonymous codon usage bias. It may give an approximate indication of the likely success of the heterologous gene expression</p>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-lg-8" style="margin-top: 0.2%;margin-bottom: 0.1%">
              <form method="post" action="basicmodule.php" enctype="multipart/form-data" style="margin-left: 20%">
                                                      <div style="margin-top: 5%;margin-bottom: 5%">
                                                      <h6 style="font-weight: bold;font-family: sans-serif;">Upload fasta file (whose CAI will be calculated) :</h6>
                                                      <input type="file" name="verifyCAI" class="btn">
                                                      </div>
                                                      <div style="margin-top: 5%;margin-bottom: 5%">
                                                      <h6 style="font-weight: bold;font-family: sans-serif;">Reference Sequence (gene sequence as the reference set) :</h6>
                                                      <input type="file" name="referenceCAI" class="btn">
                                                      </div>
                                                      <input type="submit" class="btn btn-danger" name="CAIinp" value="Upload" id="CAIupload">
                                                      <input type="button" class="btn btn-danger btn-md" style="color: #ffffff;background-color: #404040;height: 40px" data-toggle="modal" data-target="#myModal7" value="RUN"/>
                                                    <?php 
                                                    $check7=0;
                                                    if(isset($_POST['CAIinp']) && empty($_POST['verifyCAI']) && empty($_POST['referenceCAI'])){
                                                      if(!empty($_FILES['verifyCAI']['name']) && !empty($_FILES['referenceCAI']['name'])){
                                                          $CAIname1=$_SESSION['token'].$_FILES['verifyCAI']['name'];
                                                          $CAIsize1=$_FILES['verifyCAI']['size'];
                                                          $CAItype1=$_FILES['verifyCAI']['type'];
                                                          $CAItmp_name1=$_FILES['verifyCAI']['tmp_name'];
                                                          $CAIlocation1="basicutility/UploadBU/";
                                                          $CAImax_size1=8388608000;
                                                          $extension1=substr($CAIname1,strpos($CAIname1,".")+1);
                                                          $CAIname2=$_SESSION['token'].$_FILES['referenceCAI']['name'];
                                                          $CAIsize2=$_FILES['referenceCAI']['size'];
                                                          $CAItype2=$_FILES['referenceCAI']['type'];
                                                          $CAItmp_name2=$_FILES['referenceCAI']['tmp_name'];
                                                          $CAIlocation2="basicutility/UploadBU/";
                                                          $CAImax_size2=8388608000;
                                                          $extension2=substr($CAIname2,strpos($CAIname2,".")+1);
                                                          if($CAIsize1<=$CAImax_size1 && ($extension1=="fa" || $extension1=="fasta") && $CAItype1=="application/octet-stream" && $CAIsize2<=$CAImax_size2 && ($extension2=="fa" || $extension2=="fasta") && $CAItype2=="application/octet-stream"){
                                                            move_uploaded_file($CAItmp_name1, $CAIlocation1.$CAIname1);
                                                            move_uploaded_file($CAItmp_name2, $CAIlocation2.$CAIname2);
                                                            echo '<span class="alert alert-success">
                                                                    <strong>Success!</strong> File uploaded (Hit RUN now)</a>.
                                                                    </span>';
                                                            $check7=1;
                                                            $_SESSION['CAIfile1']=$_FILES['verifyCAI']['name'];
                                                            $_SESSION['CAIfilepath1']="basicutility/UploadBU/".$_FILES['verifyCAI']['name'];
                                                            $_SESSION['CAIfile2']=$_FILES['referenceCAI']['name'];
                                                            $_SESSION['CAIfilepath2']="basicutility/UploadBU/".$_FILES['referenceCAI']['name'];
                                                            }
                                                          else{
                                                            echo '<span class="alert alert-warning">
                                                                  <strong>Warning!</strong> File must be fasta</a>.
                                                                  </span>';
                                                            }
                                                        }
                                                        else{
                                                            echo '<span class="alert alert-warning">
                                                                  <strong>Warning!</strong> Select a fasta file first and make sure kmer length is specified</a>.
                                                                  </span>';
                                                          }
                                                      }    
                                                    echo "<div class='alert' style='color:red'>*Make sure total count of nucleotides in a sequence is divisible by 3 (Codon Triplet)</div>"
                                                    ?>
                                                    </form>

                    </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div> 
            </div>          
    </div>
  </div>
  <div class="clearfix">
    <div id="thumbcarousel" class="carousel slide" data-interval="false">
      <div class="carousel-inner">
        <div class="item active">
          <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="item1.jpg"></div>
          <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="item2.jpg"></div>
          <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="item3.jpg"></div>
          <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="item4.jpg"></div>
          <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="item5.jpg"></div>
          <div data-target="#carousel" data-slide-to="5" class="thumb"><img src="item6.jpg"></div>
        </div>
      </div> 
       </div>
  </div>
</div>
<div class="modal fade" id="myModal2">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Translation Result:</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                       
                      <?php if ($check2==1) {
                        shell_exec("python basicutility/dna2proteins.py ".$genecode." 'basicutility/UploadBU/".$trnname."' 'basicutility/Scriptout/".$_SESSION['token']."resulttrn.txt'");
                        $readseqtrn=fopen( "basicutility/Scriptout/".$_SESSION['token']."resulttrn.txt" ,"r");
                        if(filesize("basicutility/Scriptout/".$_SESSION['token']."resulttrn.txt")!=0){
                        $outreadseqtrn=fread($readseqtrn, filesize("basicutility/Scriptout/".$_SESSION['token']."resulttrn.txt"));
                        $trnsplit=explode("\n", $outreadseqtrn);
                        for ($i=0; $i < count($trnsplit)-1; $i++) { 
                          echo "<p style='font-family:monospace;'>".strtoupper($trnsplit[$i])."</p>";  
                        }
                        }
                        else{
                          echo '<br><div class="alert alert-info"><strong><i>Sorry! </i></strong> Thers was some issue while performing translation. [Make sure the uploaded is not empty]</div><br>';
                        }
                      } 
                      else{
                        echo "Please upload the fasta file";
                      }
                      ?>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    
                  </div>
                </div>
              </div>
<div class="modal fade" id="myModal3">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Consensus Result:</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                       
                      <?php if ($check3==1) {
                        shell_exec("perl basicutility/Consensus.pl -in 'basicutility/UploadBU/".$conname."' -out 'basicutility/Scriptout/".$_SESSION['token']."resultcon.txt'");
                        $readseqcon=fopen( "basicutility/Scriptout/".$_SESSION['token']."resultcon.txt" ,"r");
                        if(filesize("basicutility/Scriptout/".$_SESSION['token']."resultcon.txt")!=0){
                        $outreadseqcon=fread($readseqcon, filesize("basicutility/Scriptout/".$_SESSION['token']."resultcon.txt"));
                        $consplit=explode("\n", $outreadseqcon);
                        for ($i=0; $i < count($consplit)-1; $i++) { 
                          echo "<p style='font-family:monospace;'>".strtoupper($consplit[$i])."</p>";  
                        }
                        }
                        else{
                          echo '<br><div class="alert alert-info"><strong><i>Sorry! </i></strong> Thers was some issue while retrieving consensus sequence. [Make sure the uploaded is not empty]</div><br>';
                        }
                      } 
                      else{
                        echo "Please upload the fasta file";
                      }
                      ?>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    
                  </div>
                </div>
              </div>

<div class="modal fade" id="myModal4">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">ORF Result:</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                       
                      <?php if ($check4==1) {
                        shell_exec("python basicutility/longestORF.py 'basicutility/UploadBU/".$orfname."' 'basicutility/Scriptout/".$_SESSION['token']."resultorf.txt' ".$orflen);
                        $readseqorf=fopen( "basicutility/Scriptout/".$_SESSION['token']."resultorf.txt" ,"r");
                        if(filesize("basicutility/Scriptout/".$_SESSION['token']."resultorf.txt")!=0){
                        $outreadseqorf=fread($readseqorf, filesize("basicutility/Scriptout/".$_SESSION['token']."resultorf.txt"));
                        echo "<table class='table table-hover table-borderless' id='orftable'>
                        <col width='50%'>
                        <col width='10%'>
                        <col width='10%'>
                        <col width='10%'>
                        <col width='20%'>
                        <tr style='background-color:#f66b5d; color:#ffffff;'>
                        <th>Open Reading Frame</th>
                        <th>Length</th>
                        <th>Strand</th>
                        <th>Start Position</th>
                        <th>Sequence Id</th>
                        </tr>";
                        $orfsplit=explode("\n", $outreadseqorf);
                        for ($i=0; $i <count($orfsplit)-1 ; $i++) { 
                          $orfsplitsub=explode("\t", $orfsplit[$i]);
                          echo "<tr><td>".$orfsplitsub[0]."</td><td>".$orfsplitsub[1]."</td><td>".$orfsplitsub[2]."</td><td>".$orfsplitsub[3]."</td><td>".$orfsplitsub[4]."</td></tr>";
                        }
                        echo "</table>";
                      }
                        else{
                          echo '<br><div class="alert alert-info"><strong><i>Sorry! </i></strong> Thers was some issue while finding ORFs. [Make sure the uploaded is not empty]</div><br>';
                        }
                      } 
                      else{
                        echo "Please upload the fasta file";
                      }
                      ?>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    
                  </div>
                </div>
              </div>
<div class="modal fade" id="myModal5">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Sequence summary :</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                       
                      <?php if ($check5==1) {
                        shell_exec("perl basicutility/Sequencesummary.pl < 'basicutility/UploadBU/".$ssname."'");
                        $readseqss=fopen( "basicutility/Scriptout/resultss.txt" ,"r");
                        if(filesize("basicutility/Scriptout/resultss.txt")!=0){
                        $outreadseqss=fread($readseqss, filesize("basicutility/Scriptout/resultss.txt"));
                        echo "<table class='table table-hover table-borderless' id='sstable'>
                        <col width='44%'>
                        <col width='7%'>
                        <col width='7%'>
                        <col width='7%'>
                        <col width='7%'>
                        <col width='7%'>
                        <col width='7%'>
                        <col width='7%'>
                        <col width='7%'>
                        <tr style='background-color:#f66b5d; color:#ffffff;'>
                        <th>Sequence Id</th>
                        <th>Length</th>
                        <th>No. of A's</th>
                        <th>No. of C's</th>
                        <th>No. of G's</th>
                        <th>No. of T's</th>
                        <th>No. of N's</th>
                        <th>GC(%)</th>
                        <th>AT(%)</th>
                        </tr>";
                        $sssplit=explode("\n", $outreadseqss);
                        for ($i=0; $i <count($sssplit)-1 ; $i++) { 
                          $sssplitsub=explode("\t", $sssplit[$i]);
                          echo "<tr><td>".$sssplitsub[0]."</td><td>".$sssplitsub[1]."</td><td>".$sssplitsub[2]."</td><td>".$sssplitsub[3]."</td><td>".$sssplitsub[4]."</td><td>".$sssplitsub[5]."</td><td>".$sssplitsub[6]."</td><td>".$sssplitsub[7]."</td><td>".$sssplitsub[8]."</td></tr>";
                        }
                        echo "</table>";
                        }
                        else{
                          echo '<br><div class="alert alert-info"><strong><i>Sorry! </i></strong> Thers was some issue while determining sequence summary. [Make sure the uploaded is not empty]</div><br>';
                        }
                      } 
                      else{
                        echo "Please upload the fasta file";
                      }
                      ?>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    
                  </div>
                </div>
              </div>
<div class="modal fade" id="myModal6">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Find K-mers Result :</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                       
                      <?php if ($check6==1) {
                        shell_exec("perl basicutility/FindAllKmers.pl 'basicutility/UploadBU/".$fkname."' ".$kmer." 'basicutility/Scriptout/".$_SESSION['token']."resultfk.txt'");
                        $readseqfk=fopen( "basicutility/Scriptout/".$_SESSION['token']."resultfk.txt" ,"r");
                        if(filesize("basicutility/Scriptout/".$_SESSION['token']."resultfk.txt")!=0){
                        $outreadseqfk=fread($readseqfk, filesize("basicutility/Scriptout/".$_SESSION['token']."resultfk.txt"));
                        echo "<table class='table table-hover table-borderless' id='sstable'>
                        <col width='40%'>
                        <col width='20%'>
                        <col width='40%'>
                        <tr style='background-color:#f66b5d; color:#ffffff;'>
                        <th>Sequence Id</th>
                        <th>Start Position</th>
                        <th>K-mer</th>
                        </tr>";
                        $fksplit=explode("\n", $outreadseqfk);
                        for ($i=0; $i <count($fksplit)-1 ; $i++) { 
                          $fksplitsub=explode("^^", $fksplit[$i]);
                          echo "<tr><td>".$fksplitsub[0]."</td><td>".$fksplitsub[1]."</td><td>".$fksplitsub[2]."</td></tr>";
                        }
                        echo "</table>";
                        
                        }
                      else{
                          echo '<br><div class="alert alert-info"><strong><i>Sorry! </i></strong> Thers was some issue while finding K-mers. [Make sure the uploaded is not empty]</div><br>';
                        }
                      } 
                      else{
                        echo "Please upload the fasta file";
                      }
                      ?>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    
                  </div>
                </div>
              </div>
 <div class="modal fade" id="myModal7">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Codon Adaptive Index Result :</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                       
                      <?php if ($check7==1) {
                        shell_exec("python basicutility/UserCAI.py basicutility/UploadBU/".$CAIname1." basicutility/UploadBU/".$CAIname2." ".$_SESSION['token']);
                        $readseqCAI=fopen( "basicutility/Scriptout/".$_SESSION['token']."CAIcalculator.txt" ,"r");
                        if(filesize("basicutility/Scriptout/".$_SESSION['token']."CAIcalculator.txt")!=0){
                        $outreadseqCAI=fread($readseqCAI, filesize("basicutility/Scriptout/".$_SESSION['token']."CAIcalculator.txt"));
                        echo "<table class='table table-hover table-borderless' id='sstable'>
                        <col width='30%'>
                        <col width='50%'>
                        <col width='20%'>
                        <tr style='background-color:#f66b5d; color:#ffffff;'>
                        <th>Sequence Id</th>
                        <th>Sequence</th>
                        <th>Codon Adaptation Index</th>
                        </tr>";
                        $CAIsplit=explode("\n", $outreadseqCAI);
                        for ($i=0; $i <count($CAIsplit)-1 ; $i++) { 
                          $CAIsplitsub=explode("^^", $CAIsplit[$i]);
                          echo "<tr><td>".$CAIsplitsub[0]."</td><td>".$CAIsplitsub[1]."</td><td>".$CAIsplitsub[2]."</td></tr>";
                        }
                        echo "</table>";
                        /*$explodeCAI=explode("\n", $outreadseqCAI);
                        for ($i=0; $i < count($explodeCAI)-1 ; $i++) { 
                          echo "<p style='font-family:monospace'>".$explodeCAI[$i]."</p>";
                        }
                        //echo "<p style='font-family:monospace;font-weight:bold;'>Codon Adaptation Index : ".$explodeCAI[count($explodeCAI)-1]."</p>";*/
                      }
                      else{
                        echo '<br><div class="alert alert-info"><strong><i>Sorry! </i></strong> Thers was some issue while determining CAI-value. [Make sure the uploaded is not empty]</div><br>';
                      }
                      } 
                      else{
                        echo "Please upload the fasta file";
                      }
                      ?>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    
                  </div>
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
        <script type="text/javascript">
          
              $('#carousel').on('slid.bs.carousel', function () {
              var currentSlide = $('#carousel div.active').index();
              sessionStorage.setItem('lastSlide', currentSlide);   
              });
              if(sessionStorage.lastSlide){
                $("#carousel").carousel(sessionStorage.lastSlide*1);
              }
        </script>
    </body>
</html>