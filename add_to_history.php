<?php
session_start();
include 'db_connection.php';

if (isset($_SESSION['user_email']) && isset($_POST['title'])) {
    $email = $_SESSION['user_email'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $image = mysqli_real_escape_string($conn, $_POST['image']);

    $query = "INSERT INTO history (user_email, movie_title, movie_image) VALUES ('$email', '$title', '$image')";
    
    if ($conn->query($query)) {
        echo "Success";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>