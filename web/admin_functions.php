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

function addJObs($conn, $reqObj) {
  $query = "INSERT INTO joblist (job_code, job_title, job_type, company, location, contact_email, salary, description) VALUES (:job_code, :job_title, :job_type, :company, :location, :contact_email, :salary, :description)";
  $binding = array(
      'job_code'      => $reqObj->job_code,
      'job_title'     => $reqObj->job_title,
      'job_type'      => $reqObj->job_type,
      'company'       => $reqObj->company,
      'location'      => $reqObj->location,
      'contact_email' => $reqObj->contact_email,
      'salary'        => $reqObj->salary,
      'description'   => $reqObj->description
    );
  $results = query( $query, $conn , $binding );
  echo "Hi";
}
?>