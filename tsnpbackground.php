<?php
	if(!isset($_SESSION)){
    	session_start();
		}
?>
  <?php
    set_time_limit(0);
    if ($_SESSION['tsnpcondition']=="choose") {
    shell_exec("python snppredictor/snp_sites.py ".$_SESSION['tsnpfilepath1']." scriptoutput/".$_SESSION['tsnpfile']."_snp.txt ");
    
     
    }
    if ($_SESSION['tsnpcondition']=="input") {
    shell_exec("python snppredictor/snp_sites.py ".$_SESSION['tsnpinfilepath1'].$_SESSION['token']."Tempfile.fa scriptoutput/".$_SESSION['token']."Tempfile.fa_snp.txt");
    }
  ?>
