<?php
// Create a connection to the database
$conn = mysqli_connect("localhost", "root", "", "mydb");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "✅ Connected to the database successfully!";
}
?>
