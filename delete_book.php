<?php
// Establish MySQL connection
$hostname = "localhost";
$username = "root";
$password = "";
$database = "bookphp";

$conn = new mysqli($hostname, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if book ID was provided
if (!isset($_GET["id"])) {
  header("Location: view_book.php");
  exit();
}

// Get book ID from URL parameter
$id = $_GET["id"];

// Prepare and execute SQL statement
$stmt = $conn->prepare("DELETE FROM bookphp WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

// Redirect to view_books.php
header("Location: view_book.php");
exit();

// Close MySQL connection
$conn->close();
?>