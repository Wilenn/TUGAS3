<?php

namespace Perpustakaan;

class Book
{
    private $title;
    private $author;
    private $borrowed = false;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function getInfo()
    {
        return $this->title . " - " . $this->author;
    }

    public function borrow()
    {
        $this->borrowed = true;
    }

    public function getStatus()
    {
        return $this->borrowed ? "Dipinjam" : "Tersedia";
    }
}