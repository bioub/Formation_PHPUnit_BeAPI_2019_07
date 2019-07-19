<?php


namespace BEAPITest\Entity;


use BEAPI\Entity\Contact;
use PHPUnit\Framework\TestCase;

class ContactTest extends TestCase
{
    /** @var Contact */
    protected $contact;

    protected function setUp(): void
    {
        $this->contact = new Contact();
    }

    public function testDefaultProperties()
    {
        $this->assertNull($this->contact->getId());
        $this->assertNull($this->contact->getFirstName());
        $this->assertNull($this->contact->getLastName());
    }

    public function testPropertyGetSetId()
    {
        $this->assertEquals($this->contact, $this->contact->setId(10));
        $this->assertEquals(10, $this->contact->getId());
    }

    public function testPropertyGetSetFirstName()
    {
        $this->assertEquals($this->contact, $this->contact->setFirstName('John'));
        $this->assertEquals('John', $this->contact->getFirstName());
    }

    public function testPropertyGetSetLastName()
    {
        $this->assertEquals($this->contact, $this->contact->setLastName('Doe'));
        $this->assertEquals('Doe', $this->contact->getLastName());
    }

    public function testToArray()
    {
        $this->assertEquals(
            ['id' => null, 'firstName' => null, 'lastName' => null],
            $this->contact->toArray(),
        );

        $this->contact->setId(10);
        $this->contact->setFirstName('John');
        $this->contact->setLastName('Doe');

        $this->assertEquals(
            ['id' => 10, 'firstName' => 'John', 'lastName' => 'Doe'],
            $this->contact->toArray(),
        );
    }
}