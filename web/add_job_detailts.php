<?php
require_once( 'admin/cms.php' );
include 'database.php';
include 'admin_functions.php';
if (isset($_POST['submit'])) {
  $reqObj = new StdClass;
  $reqObj->job_title 	     = $_POST['job_title'];
  $reqObj->job_type 	     = $_POST['job_type'];
  $reqObj->job_speciality  = $_POST['job_speciality'];
  $reqObj->state           = $_POST['state'];
  $reqObj->company 		     = $_POST['company'];
  $reqObj->location 	     = $_POST['location'];
  $reqObj->contact_email   = $_POST['contact_email'];
  $reqObj->salary 		     = $_POST['salary'];
  $reqObj->description     = $_POST['description'];
  $reqObj->job_code        = $_POST['job_code'];
  $reqObj->status          = $_POST['status'];

  $conn = connect($config);
  if( $reqObj->job_code ){ 
    
    update_job_db($conn, $reqObj , $AUTH->user->id);
  } else {
    add_jobs_db($conn, $reqObj , $AUTH->user->id);
  }
  
}
?>