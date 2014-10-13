<?php
function job_lists($conn , $job_speciality, $job_location, $job_keyword) {

   $query = "SELECT * FROM joblist";
   
   $is_where_added = false;
   if( $job_speciality ){
      $query = $query . " where job_speciality=". $job_speciality;
       $is_where_added = true;
   } 
   if ( $job_location ) {
      if( !$is_where_added ){
        $query = $query . " where state='". $job_location ."'";
        $is_where_added = true;
      } else {
         $query = $query . " and state='". $job_location ."'";
      }
   }
   if( $job_keyword )  {
     if( !$is_where_added ){
        $query = $query . " where  job_title LIKE '%". $job_keyword."%' OR company  LIKE '%". $job_keyword."%' OR location  LIKE '%". $job_keyword."%' OR state  LIKE '%". $job_keyword."%' OR description  LIKE '%". $job_keyword."%'";
        //$query = $query . " where  job_title  LIKE '%". $job_keyword."%' OR job_title  LIKE '%". $job_keyword."%'";
        $is_where_added = true;
     } else {
        $query = $query . " and job_title LIKE '%". $job_keyword."%'";
     }
   }
      $binding = null;
      $results = query( $query, $conn , $binding );
      return $results;
}
function apply_job($conn, $job_code) {
   $query = "SELECT * FROM joblist WHERE job_code = :job_code";

       $binding = array( 
               'job_code' => $job_code
       );

       $results = query( $query, $conn , $binding );
       return $results;
}
?>