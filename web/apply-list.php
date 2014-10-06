<?php
class ApplyJob {
	private $job_title, $location, $job_type, $job_code, $company, $contact_email, $salary, $description;
	public function __construct($dbRow) {
		$this->job_title = $dbRow['job_title'];
		$this->location = $dbRow['location'];
		$this->job_type = $dbRow['job_type'];
		$this->job_code = $dbRow['job_code'];
		$this->company = $dbRow['company'];
		$this->contact_email = $dbRow['contact_email'];
		$this->salary = $dbRow['salary'];
		$this->description = $dbRow['description'];
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
	public function getCompany() {
		return $this->company;
	}
	public function getContact() {
		return $this->contact_email;
	}
	public function getSalary() {
		return $this->salary;
	}
	public function getDescription() {
		return $this->description;
	}
}