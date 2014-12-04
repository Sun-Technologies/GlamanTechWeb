<?php
//if there is post
if(isset($_POST) && !empty($_POST)) {
	//if there is an attachment
	if(!empty($_FILES['upload']['name'])) {
		//store some variables
		$file_name = $_FILES['upload']['name'];
		$temp_name = $_FILES['upload']['tmp_name'];
		$file_type = $_FILES['upload']['type'];

		//get the extension of the file
		$base = basename($file_name);
		$extension = substr($base, strlen($base)-4, strlen($base));
		
		//only these file types will be allowed
		$allowed_extensions = array(".doc", "docx", ".pdf");

		//check that this file type is allowed
		if(in_array($extension, $allowed_extensions)) {

			//mail essentials
			$from = $_POST['email'];
			$to = "chandra.shalwi@gmail.com";
			$subject = "Application Form";
			$message = "First Name: ".$_POST['fname']."\n"."Last Name: ".$_POST['lname']."\n"."Phone Number: ".$_POST['phone']."\n"."State: ".$_POST['state']."\n"."Zip Code: ".$_POST['zip']."\n"."Email ID: ".$_POST['email']."\n";

			//things you need
			$file = $temp_name;
			$content = chunk_split(base64_encode(file_get_contents($file)));
			$uid = md5(uniqid(time()));

			//standard mail headers
			$header = "From: ".$from."\r\n";
			$header .= "Reply-To: ".$to."\r\n";
			$header .= "MIME-Version: 1.0\r\n";

			//declaring we have multiple kinds of email
			$header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
			$header .= "This is a multi-part message in MIME format. \r\n";

			//plain text part
			$header .= "--".$uid."\r\n";
			$header .= "Content-type:text/plain; charset=iso-8859-1\r\n";
			$header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
			$header .= $message."\r\n\r\n";

			//file attachment
			$header .= "--".$uid."\r\n";
			$header .= "Content-Type: ".$file_type."; name=\"".$file_name."\"\r\n";
			$header .= "Content-Transfer-Encoding: base64\r\n";
			$header .= "Content-Disposition: upload; filename=\"".$file_name."\"\r\n\r\n";
			$header .= $content."\r\n\r\n";

			//send the email
			if(mail($to, $from, "", $header)) {
				$msg = "Thank You for Contacting us we will get back to you soon!";
				mail($from, "GlamanTech Feedback", $msg);
				header('location: search_job_thanks.php');
			} else {
				echo "<script> alert('fail');</script>";
			}
		} else {
			echo "<script> alert('file type not allowed');</script>";
		}

	} else {
		echo "no files pasted";
	}
}
?>
<?php $CURRENT_PAGE= "job-seekers"; ?>
<?php 
include'header.php';
include 'job_location.php';
require('search_job_functions.php');
require('database.php');
?>
  <div id="primary" class="container   clearfix animated bounceIn">
    <h1>Submit Your Resume</h1>
    <hr/>
    	<p>If you think you have knowledge, talent and zest to make a difference and are interested in joining us, then apply online or send in your resumes to <a href="mailto:hr@glamantech.com?Subject=Resume">hr@glamantech.com</a>. We'll get back to you shortly.</p>
    	<form method="post" action="search_job_apply.php" enctype="multipart/form-data">
    		<table class="responsive-table">
    			<?php 
    			if(isset($_GET['job_code'])) {
    				echo "<tr><td>Job Code</td><td>".$_GET['job_code']."</td></tr><tr>";

    			}
    			?>
    			<tr>
    			<td>First Name *</td>
    			<td><input type="text" id="text-input-order" name="fname" placeholder="First Name" required ></td>
    			</tr>
    			<tr>
    			<td class="dropdown-header">Last Name *</td>
    			<td><input type="text" id="text-input-order" name="lname" placeholder="Last Name" required></td>
  				</tr>
  				<tr>
    			<td class="dropdown-header">Phone# *</td>
    			<td><input type="text" id="text-input-order" name="phone" placeholder="Phone" required></td>
    			</tr>
    			<tr>
    			<td class="dropdown-header">State *</td>
    			<td  class="dropdown-header">
    				<select class="drop-style" name="state" class="table-width" required>
    					<?php echo '<option value="">Select AnyOne</option>'; ?>
    			  		<?php setSelectOptions($job_location_array  , $state); ?>
    				</select>
    			</td>
    			</tr>
    			<tr>
    			<td class="dropdown-header">Zip Code *</td>
    			<td><input type="text" id="text-input-order" name="zip" placeholder="Zip Code"  required></td>
    			</tr>
  				<tr>
    			<td class="dropdown-header">Email *</td>
    			<td><input type="email" id="text-input-order" name="email" placeholder="Email" required></td>
    			</tr>
    			<tr>
    			<td class="dropdown-header">Attach Your Resume *</td>
    			<td><input type="file" name="upload" required></td>
    			</tr>
    			<tr>
    			<td colspan="2"><b>OR</b></td>
    			</tr>
    			<tr>
    			<td colspan="2" class="dropdown-header">Paste Your Resume<br>
    			<textarea maxlength="2000" style="width: 490px; height: 150px;" id="text-input-order" name="resume"></textarea></td>
    			</tr>
  				<tr>
  				<td colspan="2">
  				<input type="submit" value="Apply Now" id="go-button" onclick="return val();">
  				</td>
  				</tr>
			</table>
		</form>
	</div>
 <script src="js/custom.js"></script>
 <?php include'footer1.php'; ?>