<?php

class Person
{
    private $firstName;

    public function __construct($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
}
