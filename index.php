<?php
include 'controllers/Encapsulation.php';

# Set variables
$name = new Name();
$name->setFirstName("Sjøtunveien");
$name->setMiddleName("U.");
$name->setLastName("Kvaløysletta");

# Display the values
echo $name->getFirstName().' '.$name->getMiddleName().' '.$name->getLastName();
