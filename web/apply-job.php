<?php $CURRENT_PAGE= "job-seekers"; ?>
<?php 
include('header.php'); 
require('database-apply.php');
?>
<div id="primary" class="container clearfix" style="padding-bottom: 5%;">
<h1 class="page-title">Job Details</h1>
<div class="wp-area">
<?php
$db = new Database('localhost', 'root', '', 'job');
$dataSet = $db->getApply("SELECT job_code, job_title, job_type, company, location, contact_email, salary, description FROM joblist WHERE job_code = 'J100000'");
if($dataSet) {
	foreach ($dataSet as $data) {
		echo "<table>";
		echo "<tr><td class='table-data'>Job Code</td><td>".$data->getJobCode()."</td></tr>";
		echo "<tr><td class='table-data'>Job Title</td><td>".$data->getJobTitle()."</td></tr>";
		echo "<tr><td class='table-data'>Job Type</td><td>".$data->getJobType()."</td></tr>";
		echo "<tr><td class='table-data'>Comapny</td><td>".$data->getCompany()."</td></tr>";
		echo "<tr><td class='table-data'>Location</td><td>".$data->getLocation()."</td></tr>";
		echo "<tr><td class='table-data'>Contact Email</td><td>".$data->getContact()."</td></tr>";
		echo "<tr><td class='table-data'>Salary Offered</td><td>".$data->getSalary()."</td></tr>";
		echo "<tr><td class='table-data'>Description</td><td>".$data->getDescription()."</td></tr>";
		echo "</table>";
	}
}
else
{
echo "No Results Found!";
}
?>
</div>
<input type="submit" value="Apply Now" id="apply-button">
</div>
<?php include('footer1.php'); ?>