<?php

use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    public function testCanConstructObject()
    {
        $this->assertInstanceOf(
            Person::class,
            new Person("Jan")
        );
    }

    public function testFirstNameIsSetCorrectly()
    {
        $name = "Jan";
        $person = new Person($name);

        $this->assertEquals(
            $name,
            $person->getFirstName()
        );
    }
}
