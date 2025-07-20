<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <h2>Submit a Testimonial</h2>
        <form action="submit_testimonial.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="rating">Rating:</label>
            <select id="rating" name="rating" required>
                <option value="1">1 Star</option>
                <option value="2">2 Stars</option>
                <option value="3">3 Stars</option>
                <option value="4">4 Stars</option>
                <option value="5">5 Stars</option>
            </select>
            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment" required></textarea>
            <button type="submit">Submit</button>
        </form>

        <h2>Testimonials</h2>
        <div class="testimonials">
            <?php
            include('db_connect.php');

            // Fetch testimonials from database
            $sql = "SELECT * FROM testimonials";
            $result = mysql_query($sql, $conn);

            if (mysql_num_rows($result) > 0) {
                while ($row = mysql_fetch_assoc($result)) {
                    echo '<div class="testimonial">';
                    echo '<p><strong>' . $row['name'] . '</strong> - <span class="rating">';
                    for ($i = 0; $i < $row['rating']; $i++) {
                        echo '★';
                    }
                    echo '</span></p>';
                    echo '<p>' . $row['comment'] . '</p>';
                    echo '</div>';
                }
            } else {
                echo "No testimonials available.";
            }
            ?>
        </div>
    </div>
</body>
</html>
