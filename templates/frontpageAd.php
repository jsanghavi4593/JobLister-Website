<?php include 'inc/header1.php'; ?>

  <!--  <?php echo "Signed in as";echo $_SESSION["display"];?> -->

	   <h2 style="text-align: center;color: #1cbc9b;"><u>Admin Panel</u></h2>
        <br>
      <div class="jumbotron">
        <h1>Find a Job</h1>
       
       <form method="GET" action ="indexAd.php">
       	<select name="category" class="form-control">
       		<option value="0">Choose category</option>

       		<?php foreach ($categories as $category): ?>  		<option value="<?php echo $category->id; ?>"><?php echo $category->name;?></option>

       		<?php endforeach; ?>
       		
       	</select>
       	<br>
       	<input type="submit" class="btn btn-lg btn-success" value="FIND">
       </form>
      </div>
      <h3><?php echo $title; ?></h3>
      <?php foreach ($jobs as $job): ?>     
      <div class="row marketing">
        <div class="col-md-10">
          <h4><?php echo $job->job_title;?></h4>
          <p><?php echo $job->description; ?></p>
         

        </div>

        <div class="col-md-2">
        	<a class ="btn btn-default" href="job.php?id=<?php echo $job ->id;?>">View </a>
        	
        </div>
    </div>   
	<?php endforeach; ?>

     
   
<?php include 'inc/footer.php'; ?>
