<?php
include('db_connect.php');

// Fetch testimonials from database
$sql = "SELECT * FROM testimonials";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
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
