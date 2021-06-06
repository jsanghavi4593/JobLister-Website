<?php 


use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require 'vendor/autoload.php'; 

$custid=$_POST['custid'];
$sender_name=$_POST['sender_name'];
$sender_email=$_POST['sender_email'];
$sender_message=$_POST['message'];

if (isset($_POST['submit']))

{

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "joblister";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM jobs WHERE id=$custid";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	   	$cust_email=$row["contacte"];
	  }
	} else {
	  echo "0 results";
	}
	$conn->close();

	echo $cust_email;

	  $errors= array();
      $file_name = $_FILES['attachment']['name'];
      $file_size = $_FILES['attachment']['size'];
      $file_tmp = $_FILES['attachment']['tmp_name'];
      $file_type = $_FILES['attachment']['type'];
     
      
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"e:/".$file_name); //The folder where you would like your file to be saved
         echo "Success";
      }
      else{
         print_r($errors);
      }

}


 $mail = new PHPMailer(true); 

try { 

$mail->Host = 'tls://smtp.gmail.com:587';
$mail->SMTPOptions = array(
   'ssl' => array(
     'verify_peer' => false,
     'verify_peer_name' => false,
     'allow_self_signed' => true
    )
);

	$mail->SMTPDebug = 2;									 
	$mail->isSMTP();											 
	//$mail->Host	 = 'smtp.gmail.com;';					 
	$mail->SMTPAuth = true;							 
	$mail->Username = 'mohakshah2000@gmail.com';				 
	$mail->Password = 'Mohak$007';						 
	$mail->SMTPSecure = 'tls';							 
	$mail->Port	 = 587; 
	$mail->SMTPKeepAlive = true;   
	$mail->Mailer = smtp;

	$mail->setFrom('mohakshah2000@gmail.com', 'Job application');		 
	$mail->addAddress($cust_email); 
	$mail->addAddress('mohakshah2000@gmail.com'); 
	$mail->addAttachment("e:/".$file_name);	
	$mail->isHTML(true);								 
	$mail->Subject = $_POST['subject']; 
	$mail->Body = " 
	Name: $sender_name
	<br>

	Email: $sender_email
	<br>

	Message: $sender_message <br>"; 

	//$mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
	$mail->send(); 
	header("Location:index.php");
	echo "<script>alert('Message has been sent')</script>";
	
} catch (Exception $e) { 
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
} 

?> 
