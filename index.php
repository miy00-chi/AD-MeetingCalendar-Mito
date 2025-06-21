<?php
try {
    require_once __DIR__ . '/../vendor/autoload.php'; // Adjust if needed
    $mongo = new MongoDB\Client("mongodb://mongodb:27017");
    echo "✅ Connected to MongoDB successfully.<br>";
} catch (Exception $e) {
    echo "❌ MongoDB connection failed: " . $e->getMessage() . "<br>";
}

try {
    require_once __DIR__ . '/../vendor/autoload.php'; // Adjust if needed
    $mongo = new MongoDB\Client("mongodb://mongodb:27017");
    echo "✅ Connected to MongoDB successfully.<br>";
} catch (Exception $e) {
    echo "❌ MongoDB connection failed: " . $e->getMessage() . "<br>";
}
?>
