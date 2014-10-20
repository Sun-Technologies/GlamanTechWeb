<?php $CURRENT_PAGE= "job-seekers"; ?>
<?php 
include('header.php'); 
require('database.php');
require('search_job_functions.php');
?>
<div id="primary" class="container clearfix" style="padding-bottom: 5%;">
<h1 class="page-title">Job Details</h1>
<div class="wp-area">
<table>
<form method="POST" action="search_job_apply.php">
<?php
$job_code = $_GET['job_code'];
$conn = connect($config);
$results = fetch_job_details_db($conn, $job_code);
foreach ($results as $list) {
	echo "<tr><td class='table-head'>Job Code</td><td>".$list[0]."</td></tr>";
	echo "<tr><td class='table-head'>Job Title</td><td>".$list[1]."</td></tr>";
	echo "<tr><td class='table-head'>Job Type</td><td>".$list[2]."</td></tr>";
	echo "<tr><td class='table-head'>Comapny</td><td>".$list[3]."</td></tr>";
	echo "<tr><td class='table-head'>Location</td><td>".$list[4]. "," . $list[5] . "</td></tr>";
	echo "<tr><td class='table-head'>Contact Email</td><td>".$list[6]."</td></tr>";
	echo "<tr><td class='table-head'>Salary Offered</td><td>".$list[7]."</td></tr>";
	echo "<tr><td class='table-head'>Description</td><td>".$list[8]."</td></tr>";
}
?>
</table>
<input type="submit" value="Apply Now" id="apply-button">
</form>
</div>
</div>
<?php include('footer1.php'); ?>