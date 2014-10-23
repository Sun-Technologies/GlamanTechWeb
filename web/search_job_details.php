<?php $CURRENT_PAGE= "job-seekers"; ?>
<?php 
include('header.php'); 
require('database.php');
require('search_job_functions.php');
?>
<style type="text/css">
	ul {
 		list-style-type: circle;
 		list-style-position: inside;
 		list-style-image: none;
	}
	ol {
 		list-style-position: inside;
 		
	}
</style>
<div id="primary" class="container clearfix" style="padding-bottom: 5%;">
<h1 class="page-title">Job Details</h1>
<div class="wp-area">
<table>

<?php
$job_code = $_GET['job_code'];
$conn = connect($config);
$results = fetch_job_details_db($conn, $job_code);
foreach ($results as $list) {
	extract($list);
	echo "<form method='POST' action='search_job_apply.php?job_code=". $job_code ."'>";
	echo "<tr><td class='table-head'>Job Code</td><td>".$job_code."</td></tr>";
	echo "<tr><td class='table-head'>Job Title</td><td>".$job_title."</td></tr>";
	echo "<tr><td class='table-head'>Job Type</td><td>".$job_type."</td></tr>";
	echo "<tr><td class='table-head'>Comapny</td><td>".$company."</td></tr>";
	echo "<tr><td class='table-head'>Location</td><td>".$location. "," . $state . "</td></tr>";
	echo "<tr><td class='table-head'>Contact Email</td><td><a href=mailto:hr@glamantech.com?Subject=" . $job_title . ">".$contact_email."</a></td></tr>";
	echo "<tr><td class='table-head'>Salary Offered</td><td>".$salary."</td></tr>";
	echo "<tr><td class='table-head'>Description</td><td class='mceEditable' style='padding-left:30px;list-style:circle inside none'>".html_entity_decode($description)."</td></tr>";
}
?>
</table>
<input type="submit" value="Apply Now" id="apply-button">
<span class="admin-add-job-right"><a href="jobs.php">Go Back!</a></span>
</form>
</div>
</div>
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
	 plugins: "noneditable",
     noneditable_leave_contenteditable: true
 });
</script>
<?php include('footer1.php'); ?>
