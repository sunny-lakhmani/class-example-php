<?php

class Author {

    /**
     * @var string
     */
    private $firstName = null;

    /**
     * @var string
     */
    private $lastName = null;

    function __construct($firstName, $lastName) {
        if(is_string($firstName) && is_string($lastName)) {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        } else {
            throw new Exception("First name and last name must be of string type.");
        }
    }

    /**
     * @return string. Get first name of the author
     */
    public function getFirstName() {
        return ucfirst($this->firstName);
    }

    /**
     * @return string. Get last name of the author
     */
    public function getLastName() {
        return ucfirst($this->lastName);
    }

    /**
     * @return string. Get full name of the author
     */
    public function getFullName() {
        return ucfirst($this->firstName) . " " . ucfirst($this->lastName);
    }

} 