<?php
session_start();
include 'db_connection.php';

if (isset($_POST['save_profile'])) {
    $email = $_SESSION['user_email'];
    $new_name = mysqli_real_escape_string($conn, $_POST['newName']);

    $conn->query("UPDATE users SET name = '$new_name' WHERE email = '$email'");
    $_SESSION['user_name'] = $new_name;

    if (isset($_FILES['profileImage']) && $_FILES['profileImage']['error'] === 0) {
        $file_name = $_FILES['profileImage']['name'];
        $tmp_name = $_FILES['profileImage']['tmp_name'];
        
        $new_img_name = uniqid("IMG-", true) . "-" . $file_name;
        $upload_path = 'uploads/' . $new_img_name;

        if (move_uploaded_file($tmp_name, $upload_path)) {
            $conn->query("UPDATE users SET image = '$new_img_name' WHERE email = '$email'");
        }
    }

    header("Location: settings.php?status=success");
    exit();
}
?>
