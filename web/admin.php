<?php $CURRENT_PAGE= "job-seekers"; ?>
<?php 
include('header.php'); 
?>
<div id="primary" class="container clearfix" style="padding-bottom: 5%;">
<h1>Welcome to Admin Login!</h1>
<div class="wp-area">
<form method="POST" action="login.php">
<input type="text" name="name">
<input type="password" name= "password">
<input type="submit" value="Login" id="apply-button">
</form>
</div>
</div>
<?php include('footer1.php'); ?>