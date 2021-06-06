
<!DOCTYPE html>
<html>
<head>

	<title>Job Lister</title>

      <h2 style="text-align:center"><?php echo "" .$_SESSION['hello'];  ?></h2>
     
	<link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
 
 <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" ><a href="index.php">Home</a></li>
            <li role="presentation"><a href="AboutUs.php">About Us</a></li>
            <li role="presentation"><a href="log.php"><?php echo $_SESSION['log']; ?></a></li>
            <li role="presentation"><a href="log1.php"><?php echo $_SESSION['log1']; ?></a></li>
                     </ul>
        </nav>
        
        <h3 class="text-muted"> <?php echo SITE_TITLE; ?> </h3>
      </div>


     


