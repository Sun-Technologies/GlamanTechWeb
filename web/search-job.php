<?php $CURRENT_PAGE= "job-seekers"; ?>
<?php include'header.php'; ?>
  <div class="split_line"></div>
  <div id="primary" class="container   clearfix" style="padding-bottom: 40%;">
    <h1>Search For Job</h1>
    <hr/>
    <div class="wp-area">
    	<form method="post" action="job-list.php">
    		<ul class="job-list">
    			<li>
    			<span class="dropdown-header">Keyword</span><br>
    			<input type="text" name="keyword" placeholder="Keyword" id="text-input">
    			</li>
    			<li>
    			<span class="dropdown-header">Job Speciality</span><br>
    			<select class="drop-style">
    				<option>Select All</option>
					<option>Accounting &amp; Financial</option>
					<option>Distribution</option>
					<option>Engineering</option>
					<option>Healthcare</option>
					<option>Information Technology</option>
					<option>Manufacturing</option>
					<option>Retail Supermarket</option>
					<option>Scientific/ Clinical</option>
  				</select>
  				</li>
  				<li>
    			<span class="dropdown-header">Location</span><br>
    			<select class="drop-style">
    				<option>Alabama</option>
					<option>Alaska</option>
					<option>Alberta</option>
					<option>Arizona</option>
					<option>Arkansas</option>
					<option>British Columbia</option>
					<option>California</option>
					<option>Colorado</option>
					<option>Connecticut</option>
					<option>Delaware</option>
					<option>District of Columbia</option>
					<option>Florida</option>
					<option>Georgia</option>
					<option>Hawaii</option>
					<option>Idaho</option>
					<option>Illinois</option>
					<option>Indiana</option>
					<option>International</option>
					<option>Iowa</option>
					<option>Kansas</option>
					<option>Kentucky</option>
					<option>Louisiana</option>
					<option>Maine</option>
					<option>Maryland</option>
					<option>Massachusetts</option>
					<option>Michigan</option>
					<option>Minnesota</option>
					<option>Mississippi</option>
					<option>Missouri</option>
					<option>Montana</option>
					<option>Nebraska</option>
					<option>Nevada</option>
					<option>New Hampshire</option>
					<option>New Jersey</option>
					<option>New Mexico</option>
					<option>New York</option>
					<option>North Carolina</option>
					<option>North Dakota</option>
					<option>Nova Scotia</option>
					<option>Ohio</option>
					<option>Oklahoma</option>
					<option>Ontario</option>
					<option>Oregon</option>
					<option>Pennsylvania</option>
					<option>Puerto Rico</option>
					<option>Quebec</option>
					<option>Rhode Island</option>
					<option>South Carolina</option>
					<option>South Dakota</option>
					<option>Tennessee</option>
					<option>Texas</option>
					<option>Utah</option>
					<option>Vermont</option>
					<option>Virginia</option>
					<option>Washington</option>
					<option>West Virginia</option>
					<option>Wisconsin</option>
					<option>Wyoming</option>
  				</select>
  				</li>
  				<li>
  					<input type="submit" id="go-button" value="Go!">
  				</li>
			</ul>
		</form>
    </div>
  </div>
  <?php include'footer1.php'; ?>