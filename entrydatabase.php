<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <center>
    <p>This is the First Page</p>
<form method="post" action="add_book.php">

  <br>
  <label for="name">Name:</label>
  <input type="text" name="name" id="name" required><br>
  <label for="subject">Subject:</label>
  <input type="text" name="subject" id="subject" required><br>
  <label for="author">Author:</label>
  <input type="text" name="author" id="author" required><br>
  <label for="price">Price:</label>
  <input type="number" step="0.01" name="price" id="price" required><br>
  <br>
  <input type="submit" value="Add Book">
  </center>
</form>
</body>
</html>