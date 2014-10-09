<?php $CURRENT_PAGE= "job-seekers"; ?>
<?php include'header.php'; ?>
  <div class="split_line"></div>
  <div id="primary" class="container   clearfix" style="padding-bottom: 40%;">
    <h1>Search For Job</h1>
    <hr/>
    <div class="wp-area">
    	<form method="post" action="job-list.php">
    		<ul class="job-list" style="margin-left: 5%;">
    			<li>
    			<span class="dropdown-header">First Name</span><br>
    			<input type="text" name="keyword" placeholder="First Name" id="text-input" required>
    			</li>
    			<li>
    			<span class="dropdown-header">Last Name</span><br>
    			<input type="text" name="keyword" placeholder="Last Name" id="text-input" required>
    			</li>
  				<li>
    			<span class="dropdown-header">Phone#</span><br>
    			<input type="text" name="keyword" placeholder="Phone" id="text-input" required>
    			</li><br>
    			<li>
    			<span class="dropdown-header">State</span><br>
    			<input type="text" name="keyword" placeholder="First Name" id="text-input" required>
    			</li>
    			<li>
    			<span class="dropdown-header">Zip Code</span><br>
    			<input type="text" name="keyword" placeholder="Zip Code" id="text-input" required>
    			</li>
  				<li>
    			<span class="dropdown-header">Email</span><br>
    			<input type="email" name="keyword" placeholder="First Name" id="text-input" required>
    			</li><br>
    			<li>
    			<span class="dropdown-header">Attach Your Resume</span><br>
    			<input type="file" name="keyword" required>
    			</li><br>
    			<li><b>OR</b><br><li>
    			<li>
    			<span class="dropdown-header">Post Your Resume</span><br>
    			<textarea name="keyword" required>
    			</li>

  				<li>
  					<input type="submit" id="go-button" value="Go!">
  				</li>
			</ul>
		</form>
    </div>
  </div>
  <?php include'footer1.php'; ?>