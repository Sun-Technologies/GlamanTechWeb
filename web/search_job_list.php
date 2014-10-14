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

   $itemsPerPage = 5;
   $binding = null;
   $results = query( $query, $conn , $binding );
   if(sizeof($results) <= $itemsPerPage ) {
      // print all row 
      printRestuls($results);
   } else {
    $page_results = array();
    for($index = 0; $index < $itemsPerPage; $index++) {
      $page_results[] = $results[$index];

    } 
    // print $page_results 
    printRestuls($page_results);
    

    //show next button 
    showpagination('', 'current', sizeof($results)/$itemsPerPage , 0 , $itemsPerPage, $job_speciality, $job_location, $job_keyword);
    return $page_results;
  }
      
}
function showpagination($isprv , $isNext , $no_of_page , $currentPage, $itemsPerPage, $job_speciality, $job_location, $job_keyword) {
  echo $job_speciality;
  echo '<div class="pagination-page light-theme simple-pagination"><ul>';
  echo '<li class="active"><span class="'.$isprv.' prev">Prev</span></li>';
  
  for( $index = 0 ; $index < $no_of_page ; $index++ ){

    // if($currentPage == $index ) {
    //   echo '<li class="active"><span class="">'. ($index + 1 ).'</span></li>';
    // } else {
    //    echo '<li class="active"><span class="current"><a href="?='. ( $index + 1 ) .'">'. ($index + 1 ).'</a></span></li>';
    // }

  }

  echo '<li class="active"><span class="'.$isNext.' next"><a href="javascript: getData('.$job_speciality.'.'.$job_location.'.'.$job_keyword.'.'.$currentPage.'.'.$itemsPerPage.');">Next</a></span></li>';
  echo '</ul></div>';
}

function printRestuls($results){

  if( empty($results)){
    echo "<span class='result'>No Results Found</span>";
 } else{
     
    echo "<table><tbody><th>Job Title</th><th>Location</th><th class='hide-data'>Job Type</th><th class='hide-data'>Job Code</th>";
    foreach ($results as $list) {
      echo "<tr class='table-data'><td><a href='search_job_details.php?job_code=" . $list[0] . "'>" . $list[1] . "</a></td>" . "<td>" . $list[4] . "</td><td class='hide-data'>" . $list[2] . "</td><td class='hide-data'>". $list[0] . "</td></tr></tbody>";
    }
    echo "</table>";
 }

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