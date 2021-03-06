<?php 

require_once( 'admin/cms.php' );
$CURRENT_PAGE= "job-seekers"; 
include 'admin_functions.php';

include'header.php'; 
require('search_job_functions.php');
include 'job_speciality.php';
include 'job_location.php'; 
include 'job_status.php';


$reqObj= new StdClass;
$reqObj->job_speciality = isset( $_POST['job_speciality']) ? $_POST['job_speciality'] : 0;
$reqObj->job_location   = isset( $_POST['location']) ? $_POST['location'] : "";
$reqObj->job_status   = isset( $_POST['status']) ? $_POST['status'] : "";
$reqObj->job_keyword    = isset( $_POST['keyword']) ? $_POST['keyword'] : "";
$reqObj->page_index     = isset( $_POST['pageIndex'] ) ? $_POST['pageIndex'] : 0 ;
?>
<div  style="float:right;position:absolute; top:0px;right:30%;background-color:#000;height:44px;width:100px;z-index:1999;padding:10px;" >
<a href="<cms:show k_logout_link />">Logout (<cms:show k_user_title />)</a>
</div>

<div class="split_line"></div>
  <div id="primary" class="container clearfix" style="padding-bottom: 25%;">
   
    <div class='edit-db'><a href='admin-job-details.php'>Add New Job</a> </div>
    
    <div class="wp-area">
    	<form method="POST">
    		<ul class="job-list-admin">
    			<li>
    			<span class="dropdown-header">Keyword</span><br>
    			<input type="text" name="keyword" id="text-input" value="<?php echo  (isset($_POST['keyword']) ?  $_POST['keyword'] : ""); ?>" >
    			</li>
    			<li>
    			<span class="dropdown-header">Job Speciality</span><br>
    			<select class="drop-style" style="width: 155px;" name="job_speciality">
            <?php echo '<option value="">Select All</option>'; ?>
    				<?php setSelectOptions($job_speciality_array  , $reqObj->job_speciality); ?>
  				</select>
  				</li>
  				<li>
    			<span class="dropdown-header">Location</span><br>
    			<select class="drop-style" name="location">
            <?php echo '<option value="">Select All</option>'; ?>
    			  <?php setSelectOptions($job_location_array  , $reqObj->job_location); ?>
    			</select>
  				</li>
          <li>
          <span class="dropdown-header">Status</span><br>
          <select class="drop-style" name="status">
            <?php echo '<option value="">Select All</option>'; ?>
            <?php setSelectOptions($job_status_array  , $reqObj->job_status); ?>
          </select>
          </li>
  				<li>
  					<input type="submit" id="go-button" value="Go!">
  				</li>
			</ul>
		</form>

    </div><br/>

    
    
  	<?php job_lists( $reqObj , true  , $AUTH->user->id ); ?>
  </div>
<?php include'footer1.php'; ?>
<?php COUCH::invoke(); ?>