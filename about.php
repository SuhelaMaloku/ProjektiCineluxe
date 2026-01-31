<?php
if (session_status() === PHP_SESSION_NONE) { session_start(); }
include 'db_connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['comment'])) {
    if (isset($_SESSION['user_email'])) {
        $username = mysqli_real_escape_string($conn, $_SESSION['user_name']);
        $comment = mysqli_real_escape_string($conn, $_POST['comment']);
        
        $email = $_SESSION['user_email'];
        $user_query = $conn->query("SELECT image FROM users WHERE email = '$email'");
        $user_data = $user_query->fetch_assoc();
        
        $avatar = (!empty($user_data['image'])) ? 'uploads/'.$user_data['image'] : 'profil.jpg';

        if ($comment !== '') {
            $sql = "INSERT INTO reviews (username, comment, avatar) VALUES ('$username', '$comment', '$avatar')";
            $conn->query($sql);
        }
        header('Location: about.php');
        exit;
    } else {
        header('Location: loginform.php');
        exit;
    }
}
?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - CineLuxe</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>

<section class="about">
    <h2>About CineLuxe</h2>
    <p>
        <span>CineLuxe</span> is a modern movie platform built for movie lovers.
        We bring movies together in one clean and fast experience.
    </p>
    <p class="signature">— The CineLuxe Team 🎬</p>
</section>
<section class="about">
    <h3 class="review-title">Leave a Review</h3>

    <div class="review-box">
        <form method="POST" action="about.php">
            <textarea name="comment" placeholder="Write your feedback..." required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
<div class="ratings" id="reviewsList">
    <?php
    $get_reviews = $conn->query("SELECT * FROM reviews ORDER BY created_at DESC");

    if ($get_reviews->num_rows > 0) {
        while($row = $get_reviews->fetch_assoc()) {
            ?>
            <div class="review-card">
                <img src="<?php echo $row['avatar']; ?>" alt="User Avatar">
                <div>
                    <h4><?php echo htmlspecialchars($row['username']); ?></h4>
                    <p><?php echo htmlspecialchars($row['comment']); ?></p>
                    <small style="color: #888; font-size: 11px;">
                        <?php echo date('d M Y, H:i', strtotime($row['created_at'])); ?>
                    </small>
                </div>
            </div>
            <?php
        }
    } else {
        echo "<p>No reviews yet. Be the first to write one!</p>";
    }
    ?>
</div>
</section>
<footer>
    <div class="footer-container">
        <div class="footer-about">
            <h3>CineLuxe</h3>
            <p>Your favorite movie platform. Discover, watch, and share movies with friends!</p>
        </div>

        <div class="footer-social">
            <h4>Follow Us</h4>
            <div class="social-icons">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-tiktok'></i></a>
                <a href="#"><i class='bx bxl-pinterest'></i></a>
            </div>
        </div>

        <div class="footer-newsletter">
            <h4>Stay Updated</h4>
            <p>Subscribe to our newsletter for the latest movies and reviews!</p>
            <input type="email" placeholder="Your email" />
            <button>Subscribe</button>
        </div>
    </div>

    <div class="footer-copy">
        <p>© 1990-2025 CineLuxe.com, Inc. All rights reserved.</p>
    </div>
</footer>
<script src="search.js?v=<?php echo time(); ?>"></script>
</body>
</html>
