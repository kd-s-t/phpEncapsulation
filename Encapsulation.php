<?php
class Name{
	private $__firstname;
	private $__middletname;
	private $__lastname;

	public function setFirstName($firstname){
		$this->__firstname = $firstname;
	}

	public function setMiddleName($middletname){
		$this->__middletname = $middletname;
	}

	public function setLastName($lastname){
		$this->__lastname = $lastname;
	}

	public function getFirstName(){
		return $this->__firstname;
	}

	public function getMiddleName(){
		return $this->__middletname;
	}

	public function getLastName(){
		return $this->__lastname;
	}
}
	 	 
# Set variables
$name = new Name();
$name->setFirstName("Ken Dan");
$name->setMiddleName("S.");
$name->setLastName("Tinio");

# Display the values
echo $name->getFirstName().' '.$name->getMiddleName().' '.$name->getLastName();
