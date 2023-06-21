<?php
include "config.php";

if (isset($_GET['bookId'])) {
    $bookId = $_GET['bookId'];

    $jsonData = file_get_contents('data/books.json');

    $bookData = json_decode($jsonData, true);

    $category = '';
    foreach ($bookData['bookcategory'] as $bookcategory) {
        if ($bookcategory['id'] == $bookId) {
            $category = $bookcategory['category'];
            break;
        }
    }

    $query = "SELECT * FROM tbl_16_books WHERE id = '$bookId'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $bookId = $row['id'];
            $bookName = $row['name'];
            $bookimage = $row['image_path'];
            $bookimage2 = $row['image_path2'];
            $bookdesc = $row['description'];
            $bookprice = $row['price'];
            $bookrating = $row['raiting'];
            $bookauthor = $row['author_name'];
            $bookcategory = $row['category'];

            echo '<h1>Book Details</h1>';
            echo '<div style="display: flex; flex-direction: column; align-items: center;">';
            echo '<h3>' . $bookName . ' - $' . $bookprice . '</h3>';
            echo '<p>Category: ' .  $bookcategory . '</p>';
            echo '<img src="' . $bookimage . '" alt="Book Cover" style="max-width: 300px; margin-bottom: 10px;">';
            echo '<img src="' . $bookimage2 . '" alt="Book Cover" style="max-width: 300px; margin-bottom: 10px;">';
            echo '<p>' . $bookdesc . '</p>';
            echo '  <a href="bookslist.php"><button type="button" ><b>Back to
            Home
            Page</b></button></a>';
            echo '</div>';
        } else {
            echo 'Book not found';
        }
    } else {
        echo 'Error executing the query: ' . mysqli_error($connection);
    }
} else {
    echo 'Invalid bookId';
}
?>
<?php
mysqli_close($connection);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookPage</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>

</body>
</html>
