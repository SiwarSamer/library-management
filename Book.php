<?php

class Book {
    public $title;
    public $author;
    public $isAvailable;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
        $this->isAvailable = true;
    }

    public function borrowBook() {
        if ($this->isAvailable) {
            $this->isAvailable = false;
            echo "You borrowed '{$this->title}'.<br>";
        } else {
            echo "Sorry, '{$this->title}' is currently not available.<br>";
        }
    }

    public function returnBook() {
        if (!$this->isAvailable) {
            $this->isAvailable = true;
            echo "You returned '{$this->title}'.<br>";
        } else {
            echo "'{$this->title}' was not borrowed.<br>";
        }
    }

    public function getInfo() {
        $status = $this->isAvailable ? "Available" : "Borrowed";
        return "{$this->title} by {$this->author} - {$status}";
    }
}
