<?php $CURRENT_PAGE= "job-seekers"; ?>
<?php include'header.php'; 
require('database.php');
require('search_job_list.php');
?>
  <div class="split_line"></div>
  <div id="primary" class="container clearfix" style="padding-bottom: 25%;">
    <h1>Search For Job</h1>
    <hr/>
    <div class="wp-area">
    	<form method="post" action="search-job.php">
    		<ul class="job-list">
    			<li>
    			<span class="dropdown-header">Keyword</span><br>
    			<input type="text" name="keyword" placeholder="Keyword" id="text-input">
    			</li>
    			<li>
    			<span class="dropdown-header">Job Speciality</span><br>
    			<select class="drop-style" style="width: 155px;" name="job_speciality">
    				<option value="">Select All</option>
					<option value="1">Accounting &amp; Financial</option>
					<option value="2">Distribution</option>
					<option value="3">Engineering</option>
					<option value="4">Healthcare</option>
					<option value="5">Information Technology</option>
					<option value="6">Manufacturing</option>
					<option value="7">Retail Supermarket</option>
					<option value="8">Scientific/ Clinical</option>
  				</select>
  				</li>
  				<li>
    			<span class="dropdown-header">Location</span><br>
    			<select class="drop-style" name="location">
						<option value="">Select all</option>
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AB">Alberta</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="BC">British Columbia</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="INTERNATIONAL">International</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="NS">Nova Scotia</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="ON">Ontario</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="PR">Puerto Rico</option>
						<option value="QC">Quebec</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
  				</select>
  				</li>
  				<li>
  					<input type="submit" id="go-button" value="Go!">
  				</li>
			</ul>
		</form>
    </div>
  	<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){ 
  	$job_speciality = $_POST['job_speciality'];
	$job_location = $_POST['location'];
	$job_keyword = $_POST['keyword'];
	$conn = connect($config);
	$results = job_lists($conn, $job_speciality, $job_location, $job_keyword);
	if( empty($results) ) {
	 echo "<span class='result'>No Results Found</span>";
	}
	else {
	?>
	<table><tr><th>Job Title</th><th>Location</th><th class='hide-data'>Job Type</th><th class='hide-data'>Job Code</th>
	<?php
	foreach ($results as $list) {
		echo "<tr class='table-data'><td><a href='search_job_details.php?job_code=" . $list[0] . "'>" . $list[1] . "</a></td>" . "<td>" . $list[4] . "</td><td class='hide-data'>" . $list[2] . "</td><td class='hide-data'>". $list[0] . "</td></tr>";
	}
	?>
	</table>
	<?php 
	}
	}
	?>
	</div>
<?php include'footer1.php'; ?>