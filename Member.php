<?php

namespace Perpustakaan;

class Member
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function borrowBook(Book $book)
    {
        $book->borrow();

        return $this->name . " meminjam buku " . $book->getInfo();
    }
}