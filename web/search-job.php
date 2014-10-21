<?php 
$CURRENT_PAGE= "job-seekers"; 
include'header.php'; 
require('search_job_functions.php');
include 'job_speciality.php';
include 'job_location.php'; 

$reqObj= new StdClass;
$reqObj->job_speciality = isset( $_POST['job_speciality']) ? $_POST['job_speciality'] : 0;
$reqObj->job_location   = isset( $_POST['location']) ? $_POST['location'] : "";
$reqObj->job_keyword    = isset( $_POST['keyword']) ? $_POST['keyword'] : "";
$reqObj->page_index     = isset( $_POST['pageIndex'] ) ? $_POST['pageIndex'] : 0 ;
?>
<div class="split_line"></div>
  <div id="primary" class="container clearfix" style="padding-bottom: 25%;">
    <h1>Search For Job</h1>
    <hr/>
    <div class="wp-area">
    	<form method="POST">
    		<ul class="job-list">
    			<li>
    			<span class="dropdown-header">Keyword</span><br>
    			<input type="text" name="keyword" id="text-input" value="<?php echo  (isset($_POST['keyword']) ?  $_POST['keyword'] : ""); ?>" >
    			</li>
    			<li>
    			<span class="dropdown-header">Job Speciality</span><br>
    			<select class="drop-style" style="width: 155px;" name="job_speciality">
    				<?php setSelectOptions($job_speciality_array  , $reqObj->job_speciality); ?>
  				</select>
  				</li>
  				<li>
    			<span class="dropdown-header">Location</span><br>
    			<select class="drop-style" name="location">
    			  <?php setSelectOptions($job_location_array  , $reqObj->job_location); ?>
    			</select>
  				</li>
  				<li>
  					<input type="submit" id="go-button" value="Go!">
  				</li>
			</ul>
		</form>
    </div>
  	<?php
		  job_lists( $reqObj , false, null );
      
	?>
  </div>
<?php include'footer1.php'; ?>