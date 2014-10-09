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
			$header .= "MIME-Version: 1.0\r\r";

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
			$header .= "Content-Disposition: upload; filename=\"".$file_name."\"\r\n";
			$header .= $content."\r\n\r\n";

			//send the email
			if(mail($to, $from, $header)) {
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
<?php include'header.php'; ?>
  <div id="primary" class="container   clearfix">
    <h1>Search For Job</h1>
    <hr/>
    	<form method="post" action="" enctype="multipart/form-data">
    		<table>
    			<tr>
    			<td class="dropdown-header">First Name *</td>
    			<td><input type="text" id="fname" name="fname" placeholder="First Name" required ></td>
    			</tr>
    			<tr>
    			<td class="dropdown-header">Last Name *</td>
    			<td><input type="text" id="lname" name="lname" placeholder="Last Name" required></td>
  				</tr>
  				<tr>
    			<td class="dropdown-header">Phone# *</td>
    			<td><input type="text" id="phone" name="phone" placeholder="Phone" required></td>
    			</tr>
    			<tr>
    			<td class="dropdown-header">State *</td>
    			<td  class="dropdown-header"><select class="drop-style" style="width: 155px; border:1px solid grey;" name="state" id="state">
    				<option value="">Select AnyOne</option>
    				<option value="Alabama">Alabama</option>
					<option value="Alaska">Alaska</option>
					<option value="Alberta">Alberta</option>
					<option value="Arizona">Arizona</option>
					<option value="Arkansas">Arkansas</option>
					<option value="British Columbia">British Columbia</option>
					<option value="California">California</option>
					<option value="Colorado">Colorado</option>
					<option value="Connecticut">Connecticut</option>
					<option value="Delaware">Delaware</option>
					<option value="District of Columbia">District of Columbia</option>
					<option value="Florida">Florida</option>
					<option value="Georgia">Georgia</option>
					<option value="Hawaii">Hawaii</option>
					<option value="Idaho">Idaho</option>
					<option value="Illinois">Illinois</option>
					<option value="Indiana">Indiana</option>
					<option value="International">International</option>
					<option value="Iowa">Iowa</option>
					<option value="Kansas">Kansas</option>
					<option value="Kentucky">Kentucky</option>
					<option value="Louisiana">Louisiana</option>
					<option value="Maine">Maine</option>
					<option value="Maryland">Maryland</option>
					<option value="Massachusetts">Massachusetts</option>
					<option value="Michigan">Michigan</option>
					<option value="Minnesota">Minnesota</option>
					<option value="Mississippi">Mississippi</option>
					<option value="Missouri">Missouri</option>
					<option value="Montana">Montana</option>
					<option value="Nebraska">Nebraska</option>
					<option value="Nevada">Nevada</option>
					<option value="Hampshire">New Hampshire</option>
					<option value="New Jersey">New Jersey</option>
					<option value="New Mexico">New Mexico</option>
					<option value="New York">New York</option>
					<option value="North Carolina">North Carolina</option>
					<option value="North Dakota">North Dakota</option>
					<option value="Nova Scotia">Nova Scotia</option>
					<option value="Ohio">Ohio</option>
					<option value="Oklahoma">Oklahoma</option>
					<option value="Ontario">Ontario</option>
					<option value="Oregon">Oregon</option>
					<option value="Pennsylvania">Pennsylvania</option>
					<option value="Puerto">Puerto Rico</option>
					<option value="Quebec">Quebec</option>
					<option value="Rhode">Rhode Island</option>
					<option value="South Carolina">South Carolina</option>
					<option value="South Dakota">South Dakota</option>
					<option value="Tennessee">Tennessee</option>
					<option value="Texas">Texas</option>
					<option value="Utah">Utah</option>
					<option value="Vermont">Vermont</option>
					<option value="Virginia">Virginia</option>
					<option value="Washington">Washington</option>
					<option value="West Virginia">West Virginia</option>
					<option value="Wisconsin">Wisconsin</option>
					<option value="Wyoming">Wyoming</option>
  				</select></td>
    			</tr>
    			<tr>
    			<td class="dropdown-header">Zip Code *</td>
    			<td><input type="text" id="zip" name="zip" placeholder="Zip Code"  required></td>
    			</tr>
  				<tr>
    			<td class="dropdown-header">Email *</td>
    			<td><input type="email" id="email" name="email" placeholder="Email" required></td>
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
    			<textarea maxlength="2000" style="width: 490px; height: 150px;" id="text-input" name="resume"></textarea></td>
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