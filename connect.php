<?php

// Replace these values with your actual database credentials
$host = 'sql212.infinityfree.com';
$username = 'if0_35094792'; // Default username for XAMPP MySQL is "root"
$password = 'w9BL3OUR1P';     // By default, there is no password set for the "root" user
$database = 'if0_35094792_chittiai'; // Replace 'your_database_name' with the name of your database


// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>