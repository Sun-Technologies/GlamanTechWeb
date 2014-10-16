<?php 
$CURRENT_PAGE= "Admin"; 
include'header.php'; 
?>
<div id="primary" class="container clearfix" style="padding-bottom: 5%;">
	<div class="content">
		<form method="post" action="add_job_detailts.php">
		<table>
			<tbody class="table-none">
				<tr>
					<th>Job Code</th>
					<td><input type="text" id="text-input" name="job_code" class="table-width" placeholder="Job Code" required></td>
				</tr>
				<tr>
					<th>Job Title</th>
					<td><input type="text" id="text-input" name="job_title"  class="table-width" placeholder="Job Title" required></td>
				</tr>
				<tr>
					<th>Job Type</th>
					<td><input type="text" id="text-input" name="job_type"  class="table-width" placeholder="Job Type" required></td>
				</tr>
				<tr>
					<th>Company</th>
					<td><input type="text" id="text-input" name="company"  class="table-width" placeholder="Company" required></td>
				</tr>
				<tr>
					<th>Location</th>
					<td><input type="text" id="text-input" name="location"  class="table-width" placeholder="Location" required></td>
				</tr>
				<tr>
					<th>Contact Email</th>
					<td><input type="text" id="text-input" name="contact_email"  class="table-width" placeholder="Contact Email" required></td>
				</tr>
				<tr>
					<th>Salary Offered</th>
					<td><input type="text" id="text-input" name="salary"  class="table-width" placeholder="Salary" required></td>
				</tr>
				<tr>
					<th><h4 style="margin-top: -6%; color: #fff;">Description</h4></th>
					<td><textarea  rows="5" cols="41" id="text-input" style="height: auto;" name="description" placeholder="Description" required></textarea></td>
				</tr>	
			</tbody>
		</table>
		<span class="admin-add-job-left"><input type="submit" name="submit" value="Submit" id="go-button"></span>
		<span class="admin-add-job-right"><a href="admin-search-job.php"><input type="submit" name="submit" value="Cancel" id="go-button"></a></span>
		</form>
	</div>
</div>
<?php include'footer1.php'; ?>