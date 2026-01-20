<?php
if (session_status() === PHP_SESSION_NONE) { session_start(); }
include 'db_connection.php';

if (isset($_POST['btn_change_pw'])) {
    $email = $_SESSION['user_email'];
    $current_pw = $_POST['current_password'];
    $new_pw = $_POST['new_password'];
    $confirm_pw = $_POST['confirm_password'];

    $result = $conn->query("SELECT password FROM users WHERE email = '$email'");
    $user = $result->fetch_assoc();

    if (password_verify($current_pw, $user['password'])) {
        if ($new_pw === $confirm_pw) {
            $hashed_pw = password_hash($new_pw, PASSWORD_DEFAULT);
            if ($conn->query("UPDATE users SET password = '$hashed_pw' WHERE email = '$email'")) {
                header("Location: settings.php?status=pw_success");
            } else {
                echo "Error: Database update failed.";
            }
        } else {
            echo "Error: New passwords do not match!";
        }
    } else {
        echo "Error: Current password is incorrect!";
    }
    exit();
}
?>