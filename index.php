<?php
// Here the program gets started

require __DIR__ . '/tools/autoload.php';
include 'authorization/Right.php';
include 'tools/string_manipulator.php';

$right = new \authorization\Right();
$right->setId("test");

echo 'Nice Hash for "Hello Wold": ' . hashMD5('Hello World' . "\n");
echo 'Another nice Hash for "Hello Wold": ' . hashMD5('Hello World' . "\n");