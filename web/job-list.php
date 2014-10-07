<?php $CURRENT_PAGE= "job-seekers"; ?>
<?php 
include('header.php'); 
require('database.php');
?>
<div id="primary" class="container clearfix">
<h1 class="page-title">Job Search Results</h1>
<?php
$db = new Database('localhost', 'root', '', 'job');
$dataSet = $db->getJobs("SELECT job_title, location, job_type, job_code FROM joblist");
if($dataSet) {
	echo "<table><tr><th>Job Title</th><th>Location</th><th>Job Type</th><th>Job Code</th>";
	echo "</tr></table>";
	foreach ($dataSet as $data) {
		echo "<table class='table-style'><tr>";
		echo "<td><a href='apply-job.php'>".$data->getJobTitle()."</a></td>";
		echo "<td> ".$data->getLocation()."</td>";
		echo "<td> ".$data->getJobType()."</td>";
		echo "<td> ".$data->getJobCode()."</td>";
		echo "</tr></table>";
	}
}
else
{
echo "No Results Found!";
}
?>
</div>
<?php include('footer1.php'); ?>