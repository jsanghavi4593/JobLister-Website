<?php include_once 'config/init.php';

?>

<?php
$job=new Job;

if(isset($_POST['submit']))
{
	$data=array();

	$data['job_title']= $_POST['job_title'];
	$data['company']= $_POST['company'];
	$data['category_id']=$_POST['category_id'];
	$data['description']= $_POST['description'];

	$data['location']= $_POST['location'];
	$data['salary']= $_POST['salary'];
	$data['contactu']= $_POST['contactu'];
	$data['contacte']= $_POST['contacte'];



		

  if($job->create($data))
	{
		 header('Location: indexAd.php');
	}
	 else
	{
		

	}

}

$template=new Template('templates/job-create.php');

$template->categories=$job->getCategories();

echo $template;							
