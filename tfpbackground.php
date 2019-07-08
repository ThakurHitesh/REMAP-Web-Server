<?php
	if(!isset($_SESSION)){
    	session_start();
		}
?>
  <?php
    set_time_limit(0);
    if ($_SESSION['tfpcondition']=="choose") {
    shell_exec("perl mirna.pl ".$_SESSION['tfpfilepath1']." ".$_SESSION['tfpfilepath2']."/".$_SESSION['tfpfilepath3'].".fa");
    }
    if ($_SESSION['tfpcondition']=="input") {
    shell_exec("perl mirna.pl ".$_SESSION['tfpinfilepath1']."Tempfile.fa ".$_SESSION['tfpinfilepath2'].".fa");
    }
  ?>