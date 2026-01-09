<?php
session_start();
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


<script src="signin.js"></script>
</body>
</html>