<?php $CURRENT_PAGE= "job-seekers"; ?>
<?php include'header.php'; ?>
  <div class="split_line"></div>
  <div id="primary" class="container   clearfix" style="padding-bottom: 30%;">
    <h1 class="page-title">Search For Job</h1>
    <hr/>
    <div class="wp-area">
    	<form method="post" action="job-list.php">
    	<ul class="dropdown-area">
    	<li class="submenu-dropdown">
    		<span class="drop-head">Keyword</span><br>
    		<input type="text" placeholder="Keyword" id="text-input"></li>
        <li class="submenu-dropdown">
    		<span class="drop-head">Job Speciality</span>
    		<dl class="dropdown">
			<dt><a class="dark"><span>Select All</span></a></dt>
			<dd>
				<ul class="dark">
					<li><a>Accounting &amp; Financial</a></li>
					<li><a>Distribution</a></li>
					<li><a>Engineering</a></li>
					<li><a>Healthcare</a></li>
					<li><a>Information Technology</a></li>
					<li><a>Manufacturing</a></li>
					<li><a>Retail Supermarket</a></li>
					<li><a>Scientific/ Clinical</a></li>
				</ul>
			</dd>
			</dl>
		</li>
		<li class="submenu-dropdown">
    		<span class="drop-head">Location</span>
    		<dl class="dropdownsec">
			<dt><a class="dark"><span>Select All</span></a></dt>
			<dd>
				<ul class="dark" style="height: 200px; overflow: scroll;">
					<li><a>Alabama</a></li>
					<li><a>Alaska</a></li>
					<li><a>Alberta</a></li>
					<li><a>Arizona</a></li>
					<li><a>Arkansas</a></li>
					<li><a>British Columbia</a></li>
					<li><a>California</a></li>
					<li><a>Colorado</a></li>
					<li><a>Connecticut</a></li>
					<li><a>Delaware</a></li>
					<li><a>District of Columbia</a></li>
					<li><a>Florida</a></li>
					<li><a>Georgia</a></li>
					<li><a>Hawaii</a></li>
					<li><a>Idaho</a></li>
					<li><a>Illinois</a></li>
					<li><a>Indiana</a></li>
					<li><a>International</a></li>
					<li><a>Iowa</a></li>
					<li><a>Kansas</a></li>
					<li><a>Kentucky</a></li>
					<li><a>Louisiana</a></li>
					<li><a>Maine</a></li>
					<li><a>Maryland</a></li>
					<li><a>Massachusetts</a></li>
					<li><a>Michigan</a></li>
					<li><a>Minnesota</a></li>
					<li><a>Mississippi</a></li>
					<li><a>Missouri</a></li>
					<li><a>Montana</a></li>
					<li><a>Nebraska</a></li>
					<li><a>Nevada</a></li>
					<li><a>New Hampshire</a></li>
					<li><a>New Jersey</a></li>
					<li><a>New Mexico</a></li>
					<li><a>New York</a></li>
					<li><a>North Carolina</a></li>
					<li><a>North Dakota</a></li>
					<li><a>Nova Scotia</a></li>
					<li><a>Ohio</a></li>
					<li><a>Oklahoma</a></li>
					<li><a>Ontario</a></li>
					<li><a>Oregon</a></li>
					<li><a>Pennsylvania</a></li>
					<li><a>Puerto Rico</a></li>
					<li><a>Quebec</a></li>
					<li><a>Rhode Island</a></li>
					<li><a>South Carolina</a></li>
					<li><a>South Dakota</a></li>
					<li><a>Tennessee</a></li>
					<li><a>Texas</a></li>
					<li><a>Utah</a></li>
					<li><a>Vermont</a></li>
					<li><a>Virginia</a></li>
					<li><a>Washington</a></li>
					<li><a>West Virginia</a></li>
					<li><a>Wisconsin</a></li>
					<li><a>Wyoming</a></li>
				</ul>
			</dd>
			</dl>
		</li>
		<li class="submenu-dropdown">
			<input type="submit" value="Go" id="submit-input">
		</li>
		</ul>
		</form>
    </div>
  </div>
  <?php include'footer1.php'; ?>