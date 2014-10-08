<?php $CURRENT_PAGE= "job-seekers"; ?>
<?php 
include('header.php'); 
require('database.php');
require('search_job_list.php');
?>
<div id="primary" class="container clearfix" style="padding-bottom: 5%;">
<h1 class="page-title">Job Details</h1>
<div class="wp-area">
<table>
<?php
$job_code = $_GET['job_code'];
$conn = connect($config);
$results = apply_job($conn, $job_code);
foreach ($results as $list) {
	echo "<tr><td class='table-data'>Job Code</td><td>".$list[0]."</td></tr>";
	echo "<tr><td class='table-data'>Job Title</td><td>".$list[1]."</td></tr>";
	echo "<tr><td class='table-data'>Job Type</td><td>".$list[2]."</td></tr>";
	echo "<tr><td class='table-data'>Comapny</td><td>".$list[3]."</td></tr>";
	echo "<tr><td class='table-data'>Location</td><td>".$list[4]. "," . $list[5] . "</td></tr>";
	echo "<tr><td class='table-data'>Contact Email</td><td>".$list[6]."</td></tr>";
	echo "<tr><td class='table-data'>Salary Offered</td><td>".$list[7]."</td></tr>";
	echo "<tr><td class='table-data'>Description</td><td>".$list[8]."</td></tr>";
}
?>
</table>
<input type="submit" value="Apply Now" id="apply-button">
</div>
</div>
<?php include('footer1.php'); ?>