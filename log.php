<?php


if (session_status !== PHP_SESSION_ACTIVE) {
    session_start();
}

	

	if($_SESSION['log']=="Login User")
	{
		header("Location: login.php");
	}
	else
	{
		$_SESSION['log']="Login User";
		$_SESSION['hello']=" ";
	header("Location: index.php");
	}

?>
