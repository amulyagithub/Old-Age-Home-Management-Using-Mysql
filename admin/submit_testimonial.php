<?php
include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    // Insert testimonial into database
    $sql = "INSERT INTO testimonials (name, rating, comment) VALUES ('$name', '$rating', '$comment')";
    if (mysqli_query($conn, $sql)) {
        echo "Testimonial submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
