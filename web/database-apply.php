<?php
require("apply-list.php");
class Database {
	private $con;
	public function __construct($host, $username, $password, $database) {
		$this->con = new PDO("mysql:host=".$host.";dbname=".$database,$username,$password);
	}
	public function getApply($sql) {
		$statement = $this->con->prepare($sql);
		$statement->execute();
		while($row = $statement->fetch()) {
			$dataSet[] = new ApplyJob($row);
		}
		if(!empty($dataSet))
			return $dataSet;
		else 
			return null;
	}
}
?>