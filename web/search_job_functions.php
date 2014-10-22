<?php
define('PAGE_SIZE', 10);
  
function job_lists(  $reqObj , $is_admin , $user_id) {

  $results = fetchJobsFromDB($reqObj , $user_id);

  if( isResultsLessThanItemsPerPage( $results) ) {
    printRestuls($results , $is_admin);
  } else {
    $page_results = array();
    for($index = $reqObj->page_index; sizeof($page_results) < PAGE_SIZE && $index < sizeof($results)  ; $index++) {
        $page_results[] = $results[$index];
    } 
    printRestuls($page_results , $is_admin);

    showpagination( sizeof($results), $reqObj);
    return $page_results;
  }  
}

function isResultsLessThanItemsPerPage( $results ){
  return sizeof($results) <= PAGE_SIZE;
}

function showpagination($db_results_size , $reqObj) {

  $no_of_page = $db_results_size/ PAGE_SIZE;

  echo '<div class="pagination-page light-theme simple-pagination"><ul class="arrows">';

  showPreviousButton($reqObj);
  showNumberOfPages($no_of_page, $reqObj);
  showNextButton($reqObj, $db_results_size); 

  echo '</ul></div>';
}

function showPreviousButton($reqObj) {

  $isprv      = $reqObj->page_index != 0 ?   true : false; 

  if( $isprv ) { 
    $nextpage_index = $reqObj->page_index - PAGE_SIZE;
    $parameter =  '\''.$reqObj->job_speciality.'\',\''.$reqObj->job_location.'\',\''.$reqObj->job_keyword.'\',\''.$nextpage_index.'\'';
    echo '<li class="active"><a href="javascript: getData('.$parameter.');"  id="go-button">Prev</a></li>';
  
  } else {
    echo '<li class="inactive"><a href="#"  id="go-disabled">Prev</a></li>';
  }
}

function showNextButton($reqObj, $db_results_size){

  $isNext  = ($reqObj->page_index +  PAGE_SIZE ) < $db_results_size ? true : false; 
  if( $isNext ) { 
    $nextpage_index = $reqObj->page_index +  PAGE_SIZE;
    $parameter =  '\''.$reqObj->job_speciality.'\',\''.$reqObj->job_location.'\',\''.$reqObj->job_keyword.'\',\''.$nextpage_index.'\'';
    echo '<li class="active"><a href="javascript: getData('.$parameter.');"  id="go-button">Next</a></li>';
  } else {
    echo '<li class="inactive"><a href="#" id="go-disabled">Next</a></li>';
  }
}

function showNumberOfPages($no_of_page, $reqObj) {

  for( $index = 0 ; $index < $no_of_page ; $index++ ){

    if($reqObj->page_index/ PAGE_SIZE == $index ) {
      echo '<li class="active"><span class="">'. ($index + 1) .'</span></li>';
    } else {
      $nextpage_index = $index *  PAGE_SIZE;
      $parameter =  '\''.$reqObj->job_speciality.'\',\''.$reqObj->job_location.'\',\''.$reqObj->job_keyword.'\',\''.$nextpage_index.'\'';
      echo '<li class="active"><span class="current"><a href="javascript: getData('.$parameter.');">'. ( $index + 1 ).'</a></span></li>';
    }

  }
}

function fetchJobsFromDB($reqObj , $user_id){
  
  require('database.php');
  $conn = connect($config);
  
  $query = "SELECT * FROM joblist";
  $is_where_added = false;

  if( $reqObj->job_speciality ){
      $query = $query . " where job_speciality=". $reqObj->job_speciality;
       $is_where_added = true;
  } 
  
  if ( $reqObj->job_location ) {
    if( !$is_where_added ){
      $query = $query . " where state='". $reqObj->job_location ."'";
      $is_where_added = true;
    } else {
       $query = $query . " and state='". $reqObj->job_location ."'";
    }
  }

  if( $reqObj->job_keyword )  {
    if( !$is_where_added ){
      $query = $query . " where  job_title LIKE '%". $reqObj->job_keyword."%' OR company  LIKE '%". $reqObj->job_keyword."%' OR location  LIKE '%". $reqObj->job_keyword."%' OR state  LIKE '%". $reqObj->job_keyword."%' OR description  LIKE '%". $reqObj->job_keyword."%'";
      //$query = $query . " where  job_title  LIKE '%". $job_keyword."%' OR job_title  LIKE '%". $job_keyword."%'";
      $is_where_added = true;
    } else {
        $query = $query . " and job_title LIKE '%". $reqObj->job_keyword."%'";
    }
  }

  if( $reqObj->job_status ){
      if( !$is_where_added ){
        $query = $query . " where status='". $reqObj->job_status ."'";
      }else{
        $query = $query . " and status='". $reqObj->job_status ."'";
      }
  }
  return query( $query, $conn , null );
}

function printRestuls($results , $is_admin){

  include 'job_type.php';
  include 'job_status.php';
  if( empty($results)){
    echo "<span class='result'>No Results Found</span>";

  } else {
    
    echo "<table><tbody><th>Job Title</th><th>Location</th><th class='hide-data'>Job Type</th><th class='hide-data'>Job Code</th>";
    if($is_admin ) {
      echo "<th>status</th><th></th>";
    }
    foreach ($results as $list) {
      echo "<tr class='table-data'><td><a href='search_job_details.php?job_code=" . $list[0] . "'>" . $list[1] . "</a></td>" . "<td>" . $list[4]. "</td><td class='hide-data'>" . $job_type_array[$list[2]] . "</td><td class='hide-data'>". $list[0] . "</td>";
      if($is_admin ) {
        echo "<td>";
        echo  $job_status_array[$list[14]];
        echo "</td>" .
        "<td><span class='edit-db'><a href='admin-job-details.php?job_code=" . $list[0] . "'>Edit</a></span></td>";
      }
      echo "</tr></tbody>";
      
    }
    echo "</table>";
  }

}

function fetch_job_details_db($conn, $job_code) {
  $query = "SELECT * FROM joblist WHERE job_code = :job_code";
  $binding = array( 
    'job_code' => $job_code
  );

  $results = query( $query, $conn , $binding );
  return $results;
}

function setSelectOptions($val_list , $selected_val ){
  foreach ($val_list as $key => $value) {
    $sel = ( strval($selected_val) === strval($key) ) ? "selected" : "";
    echo "<option value=$key  ".$sel." >" .$value."</option>";
  }
}
?>