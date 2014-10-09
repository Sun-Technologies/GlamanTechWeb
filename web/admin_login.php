<?php
session_start();
if(!session_is_registered('password')) {
	header("location: admin.php");
}
?>
<div id="primary" class="container clearfix" style="padding-bottom: 5%;">
<div class="wp-area">
<h1>Welcome Admin!</h1>
</div>
</div>