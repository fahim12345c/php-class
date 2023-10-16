<?php
require_once 'Book.php';
require_once 'Customer.php';
 // creat book
$book1=new Book(123,"abc","fahim",12);
$book2=new Book(124,"cde","asif",1);
echo $book1->get_author()."\n";
