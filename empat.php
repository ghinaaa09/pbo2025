<?php

// Class Author
class Author {
    public string $name;
    public string $description;

    public function __construct(string $name, string $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function show(string $type) : array {
        if ($type === "info") {
            return [
                "name" => $this->name,
                "description" => $this->description
            ];
        }
        return [];
    }
}

// Class Book
class Book {
    public int $ISBN;
    public string $title;
    public string $description;
    public string $category;
    public string $language;
    public int $numberOfPage;
    public string $author;
    public string $publisher;

    public function __construct(
        int $ISBN, string $title, string $description, 
        string $category, string $language, int $numberOfPage,
        string $author, string $publisher
    ) {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function showAll() : array {
        return [
            "ISBN" => $this->ISBN,
            "title" => $this->title,
            "description" => $this->description,
            "category" => $this->category,
            "language" => $this->language,
            "numberOfPage" => $this->numberOfPage,
            "author" => $this->author,
            "publisher" => $this->publisher
        ];
    }

    public function detail(int $ISBN) : array {
        if ($this->ISBN === $ISBN) {
            return $this->showAll();
        }
        return [];
    }
}

// Class Publisher
class Publisher {
    public string $name;
    public string $address;
    private string $phone;

    public function __construct(string $name, string $address, string $phone) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setPhone(string $phone) : void {
        $this->phone = $phone;
    }

    public function getPhone() : string {
        return $this->phone;
    }
}

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