<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST["name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $rating = intval($_POST["rating"]);
    $message = $conn->real_escape_string($_POST["message"]);

    $sql = "INSERT INTO feedback (name, email, rating, message)
            VALUES ('$name', '$email', '$rating', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Thank you for your feedback!');window.location.href='index.html';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
