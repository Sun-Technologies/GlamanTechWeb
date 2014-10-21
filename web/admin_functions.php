<?php
function validateUser($conn, $emailaddress, $password) {
  $sql = "SELECT email FROM users WHERE email = '" . mysql_real_escape_string($emailaddress) . "' AND password = '" . $password . "'"; 

  $results = query( $sql, $conn , null );
  if( $results) { 
   extract($results[0] );
   $_SESSION['username'] = $email; 
   $_SESSION['loggedin'] = true; 
   header("location:admin-search-job.php");
   return;
  // If one row was returned, the user was logged in! 
  }else{
    echo "Login failed";
  }
}

function loggedIn() { 
  // check both loggedin and username to verify user. 
  if (isset($_SESSION['loggedin']) && isset($_SESSION['username'])) { 
    return true; 
  } 
   
  return false; 
} 

function add_jobs_db($conn, $reqObj , $user_id ) {
  
 
  $query = " INSERT INTO joblist (job_title, job_type, company, location, job_speciality, state, contact_email, salary, description , "
          . " created_by , updated_by , created_date , updated_date , status ) "
          . " VALUES (:job_title, :job_type, :company, :location, :job_speciality, :state, :contact_email, :salary, :description , "
          . " :created_by , :updated_by , :created_date , :updated_date , :status) ";

  $binding = array(
      'job_title'        => $reqObj->job_title,
      'job_type'         => $reqObj->job_type,
      'company'          => $reqObj->company,
      'location'         => $reqObj->location,
      'job_speciality'   => $reqObj->job_speciality,
      'state'            => $reqObj->state,
      'contact_email'    => $reqObj->contact_email,
      'salary'           => $reqObj->salary,
      'description'      => $reqObj->description,
      'created_by'       => $user_id,
      'updated_by'       => $user_id,
      'created_date'     => date('Y-m-d H:i:s'),
      'updated_date'     => date('Y-m-d H:i:s') ,
      'status'           => 1

    );

  $results = insert_query_execute( $query, $conn , $binding );
  header('location:jobs.php');
}

function update_job_db($conn, $reqObj , $user_id ) {

  $query = "UPDATE joblist SET job_title=:job_title, job_type=:job_type, company=:company, location=:location,"
      . "job_speciality=:job_speciality, state=:state, contact_email=:contact_email, salary=:salary, description=:description , "
      . "updated_by=:updated_by , updated_date=:updated_date where job_code=:job_code";

  $binding = array(
    'job_title'         => $reqObj->job_title,
    'job_type'          => $reqObj->job_type,
    'company'           => $reqObj->company, 
    'location'          => $reqObj->location,
    'job_speciality'    => $reqObj->job_speciality,
    'state'             => $reqObj->state,
    'contact_email'     => $reqObj->contact_email,
    'salary'            => $reqObj->salary,
    'description'       => $reqObj->description,
    'job_code'          => $reqObj->job_code   ,  
    'updated_by'       =>  $AUTH->user->id,
    'updated_date'     =>  date('Y-m-d H:i:s')      
  );

  $results = update_query_execute ( $query , $conn , $binding );
  header('location:jobs.php');
}

?>