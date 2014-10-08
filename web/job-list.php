<?php $CURRENT_PAGE= "job-seekers"; ?>
<?php 
include('header.php'); 
require('database.php');
require('search_job_list.php');
?>
<div id="primary" class="container clearfix">
<h1>Job Search Results</h1>
<hr>
<table><tr><th>Job Title</th><th>Location</th><th class='hide-data'>Job Type</th><th class='hide-data'>Job Code</th>
<?php
$conn = connect($config);
$results = job_lists($conn);
foreach ($results as $list) {
	echo "<tr class='table-data'><td><a href='apply-job.php?job_code=" . $list[0] . "'>" . $list[1] . "</a></td>" . "<td>" . $list[4] . "</td><td class='hide-data'>" . $list[2] . "</td><td class='hide-data'>". $list[0] . "</td></tr>";
}
?>
</table>
</div>
<?php include('footer1.php'); ?>