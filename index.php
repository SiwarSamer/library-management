<?php

require_once "Library.php";

// Create a new Library
$library = new Library();

// Add books
$library->addBook(new Book("1984", "George Orwell"));
$library->addBook(new Book("To Kill a Mockingbird", "Harper Lee"));
$library->addBook(new Book("The Great Gatsby", "F. Scott Fitzgerald"));

// Display books
$library->listBooks();

// Borrow a book
echo "<hr>";
$bookToBorrow = $library->findBook("1984");
if ($bookToBorrow) {
    $bookToBorrow->borrowBook();
}

$library->listBooks();

// Return the book
echo "<hr>";
if ($bookToBorrow) {
    $bookToBorrow->returnBook();
}

$library->listBooks();
