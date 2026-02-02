<?php
session_start();
include 'db_connection.php';
if (!isset($_SESSION['user_email'])) {
    header("Location: loginform.php");
    exit();
}

$currentUserEmail = $_SESSION['user_email'];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = $conn->query("SELECT email FROM users WHERE id = '$id'");
    $user = $query->fetch_assoc();
    $emailToDelete = $user['email'];
} else {
    $emailToDelete = $currentUserEmail;
}

if ($emailToDelete) {
    $conn->query("DELETE FROM watchlist WHERE user_email = '$emailToDelete'");
    $conn->query("DELETE FROM history WHERE user_email = '$emailToDelete'");

    $delete = $conn->query("DELETE FROM users WHERE email = '$emailToDelete'");

    if ($delete) {
        if ($emailToDelete === $currentUserEmail) {
            session_destroy();
        }
        echo "
        <body style='background-color: #141414; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; font-family: Arial, sans-serif;'>
            <div style='background: #222; padding: 20px 40px; border-radius: 8px; border: 1px solid #444; text-align: center; box-shadow: 0 4px 15px rgba(0,0,0,0.5);'>
                <h3 style='color: #e50914; margin-bottom: 10px;'>Account Deleted</h3>
                <p style='color: #fff; font-size: 14px;'>Your User Account is now Deleted. Redirecting...</p>
            </div>
            
            <script>
                setTimeout(function() {
                    window.location.href = 'Cineluxe.php';
                }, 2000);
            </script>
        </body>";
        exit();
    }
else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "User Not Found.";
}
?>
