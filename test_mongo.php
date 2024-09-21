<?php

require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://127.0.0.1:27017");

try {
    $db = $client->selectDatabase('your_database_name'); // Replace with your DB name
    echo "Database connection established!";
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
