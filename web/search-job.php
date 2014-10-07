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
					<li><a>Software</a></li>
					<li><a>Gaming</a></li>
					<li><a>Civil</a></li>
					<li><a>Testing</a></li>
					<li><a>IT Support</a></li>
					<li><a>Electrical</a></li>
					<li><a>Mechanical</a></li>
				</ul>
			</dd>
			</dl>
		</li>
		<li class="submenu-dropdown">
    		<span class="drop-head">Location</span>
    		<dl class="dropdownsec">
			<dt><a class="dark"><span>Select All</span></a></dt>
			<dd>
				<ul class="dark">
					<li><a>San Jose</a></li>
					<li><a>Redwood City</a></li>
					<li><a>Malvern</a></li>
					<li><a>Webster Groves</a></li>
					<li><a>Fort Wayne</a></li>
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