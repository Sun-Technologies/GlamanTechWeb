<?php 
$CURRENT_PAGE= "job-seekers"; 
include'header.php'; 
require('search_job_list.php');

$job_speciality_Val = isset($_POST['job_speciality']) ? $_POST['job_speciality'] : 0;
include 'job_speciality.php';

$job_location_Val = isset($_POST['location']) ? $_POST['location'] : 0; 
include 'job_location.php'; 
?>
<div class="split_line"></div>
  <div id="primary" class="container clearfix" style="padding-bottom: 25%;">
    <h1>Search For Job</h1>
    <hr/>
    <div class="wp-area">
    	<form method="post">
    		<ul class="job-list">
    			<li>
    			<span class="dropdown-header">Keyword</span><br>
    			<input type="text" name="keyword" placeholder="Keyword" id="text-input" value=<?php echo  (isset($_POST['keyword']) ?  $_POST['keyword'] : ""); ?> >
    			</li>
    			<li>
    			<span class="dropdown-header">Job Speciality</span><br>
    			<select class="drop-style" style="width: 155px;" name="job_speciality">
    				<option value="">Select All</option>
    				<?php
    				    
    					foreach ($job_speciality_array as $jobid => $job_speciality) {
 							$sel = ($job_speciality_Val == $jobid )? "selected" : "";
    						echo "<option value=$jobid  ".$sel." >" .$job_speciality."</option>";
    					}
    				?>
  				</select>
  				</li>
  				<li>
    			<span class="dropdown-header">Location</span><br>
    			<select class="drop-style" name="location">
    				<option value="">Select AnyOne</option>
    				<?php
    				    
    					foreach ($job_location_array as $locationid => $job_location) {
 							$sel = ($job_location_Val == $locationid )? "selected" : "";
    						echo "<option value=$locationid  ".$sel." >" .$job_location."</option>";
    					}
    				?>
    			</select>
  				</li>
  				<li>
  					<input type="submit" id="go-button" value="Go!">
  				</li>
			</ul>
		</form>
    </div>
  	<?php

  		$reqObj= new StdClass;
		$reqObj->job_speciality = isset( $_POST['job_speciality']) ? $_POST['job_speciality'] : "";
		$reqObj->job_location   = isset( $_POST['location']) ? $_POST['location'] : "";
		$reqObj->job_keyword 	= isset( $_POST['keyword']) ? $_POST['keyword'] : "";
		$reqObj->page_index 	= isset( $_POST['pageIndex'] ) ? $_POST['pageIndex'] : 0 ;
    
  // 		$job_speciality	= isset( $_POST['job_speciality']) ? $_POST['job_speciality'] : "";
		// $job_location 	= isset( $_POST['location']) ? $_POST['location'] : "";
		// $job_keyword 	= isset( $_POST['keyword']) ? $_POST['keyword'] : "";
		// $page_index     = isset( $_POST['pageIndex'] ) ? $_POST['pageIndex'] : 0 ; 


		
		job_lists( $reqObj );
	?>

  </div>
<?php include'footer1.php'; ?>