<?php


if (session_status !== PHP_SESSION_ACTIVE) {
    session_start();
}

	

	if($_SESSION['log1']=="Login Admin")
	{
		header("Location: templogin.php");
	}
	else
	{
		$_SESSION['log1']="Login Admin";
		$_SESSION['hello']=" ";
	header("Location: index.php");
	}

?>
