<?php
/*require("joblistdata.php");
class Database {
	private $con;
	public function __construct($host, $username, $password, $database) {
		$this->con = new PDO("mysql:host=".$host.";dbname=".$database,$username,$password);
	}
	public function getJObs($sql) {
		$statement = $this->con->prepare($sql);
		$statement->execute();
		while($row = $statement->fetch()) {
			$dataSet[] = new JobList($row);
		}
		if(!empty($dataSet))
			return $dataSet;
		else 
			return null;
	}
}
*/
$config =  array(
		'username' => 'glamantech_admin',
		'password' => 'Appl$1234',
		'hostname' => 'localhost',
		'dbname'   => 'glamantech_jobs' 
);


//Prod configuration
// $config =  array(
// 		'username' => 'popcliqsweb'	 	,
// 		'password' => 'Bubble@2013'		,
// 		'hostname' => 'popcliqsweb.db.10862321.hostedresource.com'	,
// 		'dbname'   => 'popcliqsweb'
// );


function connect ($config){

	try{

		$conn = new PDO('mysql:host='.$config['hostname'].';dbname='.$config['dbname'] ,
				$config['username'] , 
				$config['password']
		);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		return $conn;
		
	}catch(Exception $e){

		echo "Exception" . $e->getMessage();
		return false;
	}
}
function query($query , $conn , $bindings = null){

	$stmt = $conn->prepare($query);
	$stmt->execute($bindings);

	$results = $stmt->fetchAll();

	return $results ? $results : false;
}

function update_query_execute ($query , $conn , $bindings = null){
	$stmt = $conn->prepare($query);
	$stmt->execute($bindings);
	return $stmt->rowCount();
}

function insert_query_execute ($query , $conn , $bindings = null){
	$stmt = $conn->prepare($query);
	$stmt->execute($bindings);
	
	return $conn->lastInsertId();
}


?>