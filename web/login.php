<?php $CURRENT_PAGE= "job-seekers"; ?>
<?php 
include('header.php'); 
?>
<div id="primary" class="container clearfix" style="padding-bottom: 5%;">
<div class="wp-area">
<?php
$name = $_POST['name'];
$password = $_POST['password'];
if($name==("admin") && $password==("123")) {
	header("location:admin_login.php");
}
else echo 'Invalid credentials. Please Provide valid username and password';
?>
</div>
</div>
<?php include('footer1.php'); ?>