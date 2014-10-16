<?php 
$CURRENT_PAGE= "Admin"; 
include'header.php'; 
?>
<div id="primary" class="container clearfix">
	<div class="content">
		<div class="login">
			<h1>Admin Login</h1>
    		<form method="post" action="login.php">
    			<input type="email" name="email" placeholder="Email" required="required" class="admin-input" />
        		<input type="password" name="password" placeholder="Password" required="required" class="admin-input"/>
        		<input type="submit" name="submit" value="Login" id="admin-submit">
    		</form>
		</div>
	</div>
</div>
<?php include'footer1.php'; ?>