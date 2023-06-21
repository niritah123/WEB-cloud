<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>books list</title>
        <link rel="stylesheet" href="./style/style.css">

    </head>
    <body>
    <h1>Book List</h1>
    <div class="container">
        <select id="categoryDropdown">
            <option value="">All Categories</option>
            <option value="Romance novel">Romance novel</option>
            <option value="Memoir">Memoir</option>
            <option value="Thriller">Thriller</option>
        </select>
    </div>
    <main id="dataServices">
        <?php
            $query = "SELECT * FROM tbl_16_books";
            $result = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($result)){
                $bookId = $row['id'];
                $bookName = $row['name'];
                $bookimage = $row['image_path'];
                $bookimage2 = $row['image_path2'];
                $bookdesc = $row['description'];
                $bookprice = $row['price'];
                $bookrating = $row['raiting'];
                $bookauthor = $row['author_name'];
                $bookcategory = $row['category'];

                echo '<div class="book" data-category="' . $bookcategory . '">';
                echo '<a href="book.php?bookId=' . $bookId . '">';
                echo '<h4>' . $bookId . '. ' . $bookName . ': &#9733;' . $bookrating . '</h4>';
                echo '<img src="' . $bookimage . '"alt = "">';
                echo '</a>';
                echo '</div>';
            }
        ?>
        </main>
        <script src="includes/getbookslist.js"></script>
    </body>
</html>
<?php
mysqli_close($connection);
?>