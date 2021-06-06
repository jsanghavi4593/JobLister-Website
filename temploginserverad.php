<?php
    session_start();

    if (isset($_POST['submit']))
    {
    	 $_SESSION['hello'] ="Welcome " .admin;
                $_SESSION['log1']=Logout;

                header("Location: indexAd.php");
    }
?>