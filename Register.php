<?php
session_start();
include 'db_connection.php';
$error = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = mysqli_real_escape_string($conn, trim($_POST['regName']));
    $email = mysqli_real_escape_string($conn, trim($_POST['regEmail']));
    $password_raw = $_POST['regPass'];
    $confirm = $_POST['regPass2'];

    if (!$name || !$email || !$password_raw || !$confirm) {
        $error = "Please fill all fields.";
    } elseif ($password_raw !== $confirm) {
        $error = "Passwords do not match.";
    } else {
        $checkEmail = "SELECT email FROM users WHERE email='$email'";
        $result = $conn->query($checkEmail);

        if ($result->num_rows > 0) {
            $error = "User with this email already exists.";
        } else {
            $password_hashed = password_hash($password_raw, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password_hashed')";
            
            if ($conn->query($sql) === TRUE) {
                header("Location: loginform.php?success=1");
                exit;
            } else {
                $error = "Error registering user: " . $conn->error;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - CineLuxe</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
<div class="register-container">
    <div class="register-box">
        <h2>Create Account</h2>
        
        <?php if(isset($error)): ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <form id="registerForm" action="register.php" method="POST">
            <div class="form-group">
                <input type="text" name="regName" id="regName" placeholder="Full Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="regEmail" id="regEmail" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="regPass" id="regPass" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="password" name="regPass2" id="regPass2" placeholder="Repeat Password" required>
            </div>
            <button type="submit" class="register-btn">Register</button>
        </form>
        
        <p class="auth-link">Already have an account? <a href="loginform.php">Login here</a></p>
    </div>
</div>
</body>
</html>