<?php
define('PAGE_SIZE', 10);

    
    
function job_lists(  $reqObj ) {

  $results = fetchJobsFromDB($reqObj->job_speciality, $reqObj->job_location, $reqObj->job_keyword);

  if( isResultsLessThanItemsPerPage( $results) ) {
    // print all row 
    printRestuls($results);
  } else {

    $page_results = array();
    for($index = $reqObj->page_index; sizeof($page_results) < PAGE_SIZE && $index < sizeof($results)  ; $index++) {
        $page_results[] = $results[$index];
    } 
    $db_results_size = sizeof($results);
    // print $page_results 
    printRestuls($page_results);

    //show next button 
    showpagination( $db_results_size, $reqObj);
    return $page_results;
  }  
}

function isResultsLessThanItemsPerPage( $results ){
  return sizeof($results) <= PAGE_SIZE;
}

function showpagination($db_results_size , $reqObj) {


  $no_of_page = $db_results_size/ PAGE_SIZE;
  $isprv      = $reqObj->page_index != 0 ?   true : false; 
  $isNext     = ($reqObj->page_index +  PAGE_SIZE ) < $db_results_size ? true : false; 

  echo '<div class="pagination-page light-theme simple-pagination"><ul class="arrows">';

  showPreviousButton($reqObj, $isprv);
   
  for( $index = 0 ; $index < $no_of_page ; $index++ ){

    if($reqObj->page_index/ PAGE_SIZE == $index ) {
      echo '<li class="active"><span class="">'. ($index + 1) .'</span></li>';
    } else {
      $nextpage_index = $index *  PAGE_SIZE;
      $parameter =  '\''.$reqObj->job_speciality.'\',\''.$reqObj->job_location.'\',\''.$reqObj->job_keyword.'\',\''.$nextpage_index.'\'';
      echo '<li class="active"><span class="current"><a href="javascript: getData('.$parameter.');">'. ( $index + 1 ).'</a></span></li>';
    }

  }

  showNextButton($reqObj, $nextpage_index, $isNext); 
  echo '</ul></div>';
}

function showPreviousButton($reqObj, $isprv) {

  if( $isprv ) { 
  
    $nextpage_index = $reqObj->page_index - PAGE_SIZE;
    $parameter =  '\''.$reqObj->job_speciality.'\',\''.$reqObj->job_location.'\',\''.$reqObj->job_keyword.'\',\''.$nextpage_index.'\'';
    echo '<li class="active"><a href="javascript: getData('.$parameter.');"  id="go-button">Prev</a></li>';
  
  } else {
    echo '<li class="inactive"><a href="#"  id="go-disabled">Prev</a></li>';
  }
}
function showNextButton($reqObj, $nextpage_index, $isNext){

  if( $isNext ) { 
    $nextpage_index = $reqObj->page_index +  PAGE_SIZE;
    $parameter =  '\''.$reqObj->job_speciality.'\',\''.$reqObj->job_location.'\',\''.$reqObj->job_keyword.'\',\''.$nextpage_index.'\'';
    echo '<li class="active"><a href="javascript: getData('.$parameter.');"  id="go-button">Next</a></li>';
  } else {
    echo '<li class="inactive"><a href="#" id="go-disabled">Next</a></li>';
  }
}


function fetchJobsFromDB($job_speciality, $job_location, $job_keyword){
  
  require('database.php');
  $conn = connect($config);
  
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
  return query( $query, $conn , null );
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