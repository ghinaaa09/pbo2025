<?php

require_once 'Author.php';
require_once 'Book.php';
require_once 'Publisher.php';

$author1 = new Author("Ghina Audhiya Khairunisa", "Mahasiswa Sistem Informasi dan penulis muda");
print_r($author1->show("info"));

$publisher1 = new Publisher("Skintasy Publishing", "Jl. Sungai Raya Dalam, Pontianak", "081299988877");
echo "\nPublisher Phone: " . $publisher1->getPhone() . "\n";

$book1 = new Book(
    987654, 
    "Belajar Sistem Informasi dengan Mudah", 
    "Buku ini ditulis untuk membantu mahasiswa memahami dasar-dasar Sistem Informasi.", 
    "Education", 
    "Indonesia", 
    200, 
    $author1->name, 
    $publisher1->name
);

print_r($book1->showAll());

print_r($book1->detail(987654));
?>