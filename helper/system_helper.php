
<?php
  function redirect($page=FALSE,$message=NULL,$message_type=NULL)
  {
  	if(is_string($page))
  	{
  		$location=$page;
  	}
	else
	{
	  $location= $_SERVER ("SCRIPT_NAME");
	}

 	if ($message != NULL)
	 {
	 	$_SESSION ['message']=$message;
	 }

	if ($message_type != NULL)
	{

	 $_SESSION['message_type']=$message_type;
	}	


	// Redirect
	 header ('Location:'.$location);
	 exit;
}


function displayMessage()
{
 if(!empty ($_SESSION ['message'])) 
  {

	$message=$_SESSION ['message'];

	if (!empty($_SESSION['message_type']))
	{

		$message_type = $_SESSION['message_type']; 
		
	}
	
	 unset($_SESSION['message']);
	 unset($_SESSION['message_type']);
	} 

	else
	{
	 echo '';
	}
}

