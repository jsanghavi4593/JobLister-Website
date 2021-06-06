<?php include_once 'config/init.php';

?>

<?php include 'templates/inc/header1.php'; ?>
<head>
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
* {
    box-sizing: border-box;
}

.column {
    float: left;
width: 175px;
padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
content: "";
clear: both;
display: table;
}
p.big{
    line-height: 1.7;
}

</style>
</head>
<body>

<div id="main" class="box">

<!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">

        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content">

            <!-- Article -->
            <div class="article">
                <h2 align="center"><span><a href="#">About Us</a></span></h2>
               
                 <img src="job-interview1.jpg" alt="job-interview1" width="500" height="333" class="center">
                <br>
                <p class="big">Welcome to online Job Portal. It provides facility to the Job Seeker to search for various jobs as per his qualification. Here Job Seeker can register himself on the web portal. Job Seeker can search various jobs and apply for the Job of his choice.</p>



                <p class="big">This Portal is also designed for the various employers who want to recruit employees for their organization. Employer can register himself on the web portal and then he can upload information of various job vacancies of their organization. Employer can view the applications of Job Seeker which will be sent to them via Email.</p>
                <br>
                <br>
                <h2 align="center"><span><a href="#">Contact Us</a></span></h2>

  
                 <ul>
                    <li class="list-group-item"><strong>Organisation: </strong> JobLister inc.</li>

                    <li class="list-group-item"><strong>Address: </strong> A.V Road, Anand, Gujarat, India</li>

                    <li class="list-group-item"><strong>Contact Email:</strong> joblister@gmail.com</li>
                 
                  <li class="list-group-item"><strong>Contact Number:</strong> +91 6729037643</li>
</ul>


<h2 align="center"><span><a href="#">Follow Us!</a></span></h2><br>

<div class="row">
<div class="column">
<img src="insta.png" alt="Insta" usemap="#workmap" width="80" height="80">
<map name="workmap">
<area shape="rect" coords="0,0,80,80" alt="loginpageinsta" href="https://www.instagram.com/">
</map>
</div>
<div class="column">
<img src="twitt.png" alt="Twitt" usemap="#workmap1" width="80" height="80">
<map name="workmap1">
<area shape="rect" coords="0,0,80,80" alt="loginpageTw" href="https://www.twitter.com/">
</map>
</div>
<div class="column">
<img src="fb.png" alt="fb" usemap="#workmap2" width="80" height="80">
<map name="workmap2">
<area shape="rect" coords="0,0,80,80" alt="loginpagefb" href="https://www.facebook.com/">
</map>
</div>
<div class="column">
<img src="gmail.png" alt="gmail" usemap="#workmap3" width="80" height="80">
<map name="workmap3">
<area shape="rect" coords="0,0,80,80" alt="loginpagegm" href="https://www.gmail.com/">
</map>
</div>
</div>
<br>
<br>

           

<?php
include 'templates/inc/footer.php';
?>
</div> <!-- /main -->
</body>
