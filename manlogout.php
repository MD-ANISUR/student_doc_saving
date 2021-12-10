<?php
    
    session_start();

    unset($_SESSION['manageremail']);
    session_destroy();
	 

    echo "<script>window.location.assign('managerlogin.php');</script>";
?>