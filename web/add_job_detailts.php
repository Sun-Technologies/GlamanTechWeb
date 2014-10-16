<?php
include 'database.php';
include 'admin_functions.php';
if (isset($_POST['submit'])) {
  $reqObj= new StdClass;
  $reqObj->job_code		 = $_POST['job_code'];
  $reqObj->job_title 	 = $_POST['job_title'];
  $reqObj->job_type 	 = $_POST['job_type'];
  $reqObj->company 		 = $_POST['company'];
  $reqObj->location 	 = $_POST['location'];
  $reqObj->contact_email = $_POST['contact_email'];
  $reqObj->salary 		 = $_POST['salary'];
  $reqObj->description   = $_POST['description'];
  $conn = connect($config);
  addJobs($conn, $reqObj);
}
?>