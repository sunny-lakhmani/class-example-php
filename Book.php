<?php

require_once "Author.php";

class Book {

    /**
     * @var string
     */
    private $title = null;

    /**
     * @var float
     */
    private $price = 0;

    /**
     * @var Author
     */
    private $author = null;

    function __construct(Author $author, $title, $price) {
        $this->author = $author;

        if(is_string($title)) {
            $this->title = $title;
        } else {
            throw new Exception("Title must be of string type.");
        }

        if(is_numeric($price)) {
            $this->price = $price;
        } else {
            throw new Exception("Price must be a number.");
        }
    }

    /**
     * @return float. Get price of the book.
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * @param float $price. Set price of the book.
     * @throws Exception
     */
    public function setPrice($price) {
        if(is_numeric($price)) {
            $this->price = $price;
        } else {
            throw new Exception("Price must be a number.");
        }
    }

    /**
     * @return string. Get book title.
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @return string. Get the first name of the author
     */
    public function getAuthorFirstName() {
        return $this->author->getFirstName();
    }

    /**
     * @return string. Get the last name of the author
     */
    public function getAuthorLastName() {
        return $this->author->getLastName();
    }

    /**
     * @return string. Get the full name of the author
     */
    public function getAuthorFullName() {
        return $this->author->getFullName();
    }

} 