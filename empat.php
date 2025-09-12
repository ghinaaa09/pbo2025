<?php

// Contoh penggunaan
$author1 = new Author("Ghina Audhiya Khairunisa", "Mahasiswa Sistem Informasi dan penulis muda");
print_r($author1->show("info"));

// Membuat Publisher
$publisher1 = new Publisher("Skintasy Publishing", "Jl. Sungai Raya Dalam, Pontianak", "081299988877");
echo "\nPublisher Phone: " . $publisher1->getPhone() . "\n";

// Membuat Book karya Ghina
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

// Menampilkan semua data buku
print_r($book1->showAll());

// Menampilkan detail berdasarkan ISBN
print_r($book1->detail(987654));
?>