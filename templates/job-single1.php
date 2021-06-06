<?php include 'inc/header2.php'; ?>


	<h2 class="page-header"><?php echo $job->job_title; ?> ( <?php echo $job->location; ?>)</h2>

	<small>Posted By <?php echo $job->contactu;?> on <?php echo $job->post_date; ?></small>

	<hr>
	<p class="lead"><?php echo $job->description;?></p>
	<ul>
		<li class="list-group-item"><strong>Company: </strong> <?php echo $job->company ?></li>

		<li class="list-group-item"><strong>Salary: </strong> <?php echo $job->salary ?></li>

		<li class="list-group-item"><strong>Contact Email:</strong> <?php echo $job->contacte  ?></li>
	</ul>

	<br>
	<br>
	<a href="indexU.php">Go back</a>
	<br><br>
	<div class="well">
	

		<a href="mail.php?id=<?php echo $job->id; ?>" class="btn btn-default" >Apply for Job</a>
		
	</div>


<?php include 'inc/footer.php'; ?>
