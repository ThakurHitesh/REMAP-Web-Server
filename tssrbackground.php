<?php
	if(!isset($_SESSION)){
    	session_start();
		}
?>
  <?php
    set_time_limit(0);
    if ($_SESSION['tssrcondition']=="choose") {
    shell_exec("perl SSR/misa.pl ".$_SESSION['tssrfilepath1']." ".$_SESSION['token']);
    }
    if ($_SESSION['tssrcondition']=="input") {
    shell_exec("perl SSR/misa.pl ".$_SESSION['tssrinfilepath1'].$_SESSION['token']."Tempfile.fa");
    }
  ?>