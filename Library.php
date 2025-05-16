<?php

require_once "Book.php";

class Library {
    public $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function listBooks() {
        echo "<h3>Library Book List:</h3>";
        if (empty($this->books)) {
            echo "No books in the library.<br>";
            return;
        }
        foreach ($this->books as $book) {
            echo $book->getInfo() . "<br>";
        }
    }

    public function findBook($title) {
        foreach ($this->books as $book) {
            if (strtolower($book->title) === strtolower($title)) {
                return $book;
            }
        }
        return null;
    }
}
