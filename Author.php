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