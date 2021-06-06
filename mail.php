

<!DOCTYPE html>
<html>
<head>
<title>Send your application</title>
<style>
	div {
    width: 525px;
	padding:25px;
    border: 5px solid gray;
    margin-top: 50px;
	margin-left: 450px;
	}
	
	button1 {
	background-color: #4CAF50;
    color: white;
	border: none;
    cursor: pointer;
	margin-left: 10;
	padding :9px;
	}
	
</style>
</head>




<body>
	<font size=12 color= ><center>Send your application</center></font>
	<div>
			
	<form enctype="multipart/form-data" method="POST" action="mailserver.php"> 
    <label>Your Name <input type="text" name="sender_name" required> </label> 
    <br><br>
    <label>Your Email <input type="email" name="sender_email" required> </label>  
    <br><br>
    <label>Subject <input type="text" name="subject" required> </label>  
    <br><br>
    <label>Message <textarea name="message" required></textarea> </label> 
    <br> <br>
    <label>Attachment(Upload resume) <input type="file" name="attachment" required></label> 
    <br><br>
    <input type="hidden" name="custid" value="<?php echo $_GET['id'];?>">
    <label><input type="submit" name="submit" value="Submit" /></label> 
    <br><br>
</form> 
       
	</div>
	
        </body>
</html>