<?php 
require_once( 'admin/cms.php' );
$CURRENT_PAGE= "Admin"; 
include'header.php'; 
require('database.php');
include 'admin_functions.php';
require('search_job_functions.php');
include 'job_speciality.php';
include 'job_location.php';
include 'job_type.php'; 
?>
<?php
  $job_code = isset( $_GET['job_code'] ) ? $_GET['job_code'] : 0 ;
  $conn = connect($config);
  $results = fetch_job_details_db($conn, $job_code);
  if($results ){
  	extract($results[0]);
  }
?>
<div  style="float:right;position:absolute; top:0px;right:30%;background-color:#000;height:44px;width:100px;z-index:1999;padding:10px;" >
<a href="<cms:show k_logout_link />">Logout (<cms:show k_user_title />)</a>
</div>
<div id="primary" class="container clearfix" style="padding-bottom: 5%;">
	<div class="content">
		<form method="post" action="add_job_detailts.php">
		<table>
			<tbody class="table-none">
				<tr>
					<td>Job Title</td>
					<td><input type="text" id="text-input" name="job_title" value="<?php echo isset($job_title) ? $job_title : ''; ?>"  class="table-width" required>
						<input type="hidden" id="text-input" name="job_code" value="<?php echo isset($job_code) ? $job_code : ''; ?>"  class="table-width" required>
					</td>

				<tr>
					<td>Job Type</td>
					<td><select class="drop-style" name="job_type"   class="table-width"  required>
    					<?php setSelectOptions($job_type_array  , $job_type); ?>
  					</select>
					</td>
				</tr>
				<tr>
					<td>Company</td>
					<td><input type="text" id="text-input" name="company"  value="<?php echo isset($company) ? $company : ''; ?>"  class="table-width"  required></td>
				</tr>
				<tr>
					<td>Location</td>
					<td><input type="text" id="text-input" name="location"  value="<?php echo isset($location) ? $location : ''; ?>" class="table-width" required></td>
				</tr>
				<tr>
					<td>Job Speciality</td>
					<td>
						<select class="drop-style" name="job_speciality" class="table-width"  required>
    					<?php setSelectOptions($job_speciality_array  , $job_speciality); ?>
  						</select>
					</td>
				</tr>
				<tr>
					<td>State</td>
					<td>
						<select class="drop-style" name="state" class="table-width" required>
    			  		<?php setSelectOptions($job_location_array  , $state); ?>
    					</select>
    				</td>
    			</tr>
				<tr>
					<td>Contact Email</td>
					<td><input type="text" id="text-input" name="contact_email"  class="table-width" value="<?php echo isset($contact_email) ? $contact_email : ''; ?>"  required></td>
				</tr>
				<tr>
					<td>Salary Offered</td>
					<td><input type="text" id="text-input" name="salary"  class="table-width"  value="<?php echo isset($salary) ? $salary : ''; ?>"   required></td>
				</tr>
				<tr>
					<td><h4 style="position: absolute;">Description</h4></td>
					<td><textarea  rows="5" cols="41" id="text-input" style="height: auto;" name="description" required><?php echo isset($description) ? $description : ''; ?></textarea></td>
				</tr>	
			</tbody>
		</table>
		<span class="admin-add-job-left"><input type="submit" name="submit" value="Submit" id="go-button"></span>
		<span class="admin-add-job-right"><a href="jobs.php">Go Back!</a></span>
		</form>
	</div>
</div>
<?php include'footer1.php'; ?>
<?php COUCH::invoke(); ?>