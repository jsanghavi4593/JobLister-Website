
<!DOCTYPE html>
<html>
<head>
<title style="font-family: Helvetica Neue">Login</title>
<style>
	div {
    width: 500px;
	padding:25px;
    border: 5px solid gray;
    margin-top: 50px;
	margin-left: 425px;
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
	<font size=8 color= ><center>Login</center></font>
	<div>
			
		<form action="loginserverad.php" method="post">
        <h2 style="text-align: center;color: #1cbc9b;font-family: Helvetica Neue">Hello Admin</h2>

		<label>Username : </label> 
		<input type="text" placeholder="Enter username" name="username2" required >
		<br><br>
		
		<label>Password : </label> 
		<input type="Password" placeholder="Enter Password" name="password2" required >
		<br><br>

		<input type="submit" value="submit" name = "submit2">
		<hr><br>

        </form>
       
	</div>
	
        </body>
</html>
