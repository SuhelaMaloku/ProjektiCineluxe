<?php
session_start();
include 'db_connection.php';

if (!isset($_SESSION['user_email'])) {
    die("Error: you are not logged in yet.");
}
$email = $_SESSION['user_email'];
$action = $_GET['action'];
$title = mysqli_real_escape_string($conn, $_GET['title']);
$image = mysqli_real_escape_string($conn, $_GET['image']);
if ($action == 'watchlist') {
    $sql = "INSERT INTO watchlist (user_email, movie_title, movie_image) VALUES ('$email', '$title', '$image')";
    if ($conn->query($sql)) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
    } else {
        echo "Gabim SQL: " . $conn->error;
    }
}
exit();
?>