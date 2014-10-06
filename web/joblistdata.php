<?php
class JobList {
	private $job_title, $location, $job_type, $job_code;
	public function __construct($dbRow) {
		$this->job_title = $dbRow['job_title'];
		$this->location = $dbRow['location'];
		$this->job_type = $dbRow['job_type'];
		$this->job_code = $dbRow['job_code'];
	}	

	public function getJobTitle() {
		return $this->job_title;
	}
	public function getLocation() {
		return $this->location;
	}
	public function getJobType() {
		return $this->job_type;
	}
	public function getJobCode() {
		return $this->job_code;
	}
}