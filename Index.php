<?php

require_once "Book.php";
require_once "Member.php";
require_once "DigitalBook.php";

use Perpustakaan\Book;
use Perpustakaan\Member;
use Perpustakaan\DigitalBook;

$book1 = new Book("Pemrograman Web", "Anang");
$book2 = new Book("Basis Data", "Andi");

$member = new Member("Waylend");

echo "<h2>Library OOP Mini</h2>";

echo "<h3>Daftar Buku</h3>";
echo $book1->getInfo() . " | " . $book1->getStatus() . "<br>";
echo $book2->getInfo() . " | " . $book2->getStatus() . "<br>";
echo $book3->getInfo() . " | " . $book3->getStatus() . "<br>";

echo "<h3>Member</h3>";
echo "Nama: " . $member->name . "<br>";

echo "<h3>Peminjaman</h3>";
echo $member->borrowBook($book1) . "<br>";

echo "<h3>Status Buku</h3>";
echo $book1->getInfo() . " | " . $book1->getStatus() . "<br>";

echo "<h3>Digital Book</h3>";
echo $book3->download() . "<br>";

?>