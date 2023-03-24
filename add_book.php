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
// Get form data
$name = $_POST["name"];
$subject = $_POST["subject"];
$author = $_POST["author"];
$price = $_POST["price"];
// Prepare and execute SQL statement
$stmt = $conn->prepare("INSERT INTO bookphp (name, subject, author, price) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssd", $name, $subject, $author, $price);
$stmt->execute();
// Redirect to view_books.php
header("Location: view_book.php");
exit();
?>