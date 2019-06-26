<?php
include 'controllers/Encapsulation.php';

use PHPUnit\Framework\TestCase;

class TestEncapsulation extends TestCase
{

    public function testSetGetName()
    {
        $name = new Name();
        $name->setFirstName("Sjøtunveien");
        $name->setMiddleName("U.");
        $name->setLastName("Kvaløysletta");

        $this->assertEquals("Sjøtunveien U. Kvaløysletta", $name->getFirstName().' '.$name->getMiddleName().' '.$name->getLastName());
    }

}
