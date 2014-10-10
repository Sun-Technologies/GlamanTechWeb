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
			$message = "Application Details";

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
			$header .= "Content-type:text/html; charset=iso-8859-1\r\n";
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
<html>
<body>
<form method="post" action="demo.php" enctype="multipart/form-data">
	<input type="text" name="email" value="from">
	<br>
	<input type="file" name="upload">
	<br>
	<input type="submit" value="Send Mail">
</form>
</body>
</html>