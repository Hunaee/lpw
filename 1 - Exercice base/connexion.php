<?php

$host = 'sg.be';
$db   = 'lpw';
$user = 'seetuser';
$pass = '01@rfba[W.f77-n3';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    error_log("Connected to the database successfully");
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
