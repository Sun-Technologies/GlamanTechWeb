<?php
function job_lists($conn) {
   $query = 'SELECT * FROM jobs';
   $binding = null;
   $results = query( $query, $conn , $binding );
   return $results;
}
function apply_job($conn, $job_code) {
   $query = "SELECT * FROM jobs WHERE job_code = :job_code";

       $binding = array( 
               'job_code' => $job_code
       );

       $results = query( $query, $conn , $binding );
       return $results;
}
?>