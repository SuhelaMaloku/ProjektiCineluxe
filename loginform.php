<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - CineLuxe</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>


<div class="login-container">
    <div class="login-box">
        <h2>Login to CineLuxe</h2>
        
        <?php if(isset($error)): ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <form id="loginForm" action="loginform.php" method="POST">
            <div class="form-group">
                <input type="email" name="loginEmail" id="loginEmail" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="loginPassword" id="loginPassword" placeholder="Password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
        
        <p class="auth-link">Don't have an account? <a href="register.php">Register here</a></p>
    </div>
</div>

<script src="signin.js"></script>
</body>
</html>
