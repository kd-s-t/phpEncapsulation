<?php
class Name{
	private $firstname;
	private $middletname;
	private $lastname;

	public function setFirstName($firstname){
		$this->firstname = $firstname;
	}

	public function setMiddleName($middletname){
		$this->middletname = $middletname;
	}

	public function setLastName($lastname){
		$this->lastname = $lastname;
	}

	public function getFirstName(){
		return $this->firstname;
	}

	public function getMiddleName(){
		return $this->middletname;
	}

	public function getLastName(){
		return $this->lastname;
	}
}
