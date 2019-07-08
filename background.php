<?php
	if(!isset($_SESSION)){
    	session_start();
		}
?>
  <?php
    set_time_limit(0);
    if ($_SESSION['condition']=="choose") {
    	shell_exec('perl mirna.pl '.$_SESSION['filepath1'].' "'.$_SESSION['filepath2'].'/'.$_SESSION['filepath3'].'.fa" '.$_SESSION['token']);	
    }
    if ($_SESSION['condition']=="input") {
    	shell_exec('perl mirna.pl '.$_SESSION['infilepath1'].$_SESSION['token'].'Tempfile.fa "'.$_SESSION['infilepath2'].'.fa"');	
    }

    shell_exec('python mergecode.py '.$_SESSION['file']);
    shell_exec('python fastaseq.py '.$_SESSION['file']);

  ?>
