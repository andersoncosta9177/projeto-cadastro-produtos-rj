<?php
$database = 'loja';
$host = 'localhost';
$user  = 'root';
$password = '';

$pdo = new PDO("mysql:dbname=$database;host=$host", $user, $password);