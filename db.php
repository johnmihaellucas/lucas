<?php
$host = 'localhost';  // Database host
$dbname = 'employee_data'; // Database name
$username = 'root'; // Your MySQL username
$password = ''; // Your MySQL password

// Create PDO instance
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
