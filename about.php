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

<header>
    <a href="CineLuxe.php" class="logo">
        <i class='bx bx-movie'></i> CineLuxe
    </a>

    <div class="bx bx-menu" id="menu-icon"></div>

    <ul class="navbar">
        <li><a href="Cineluxe.php#home">Home</a></li>
        <li><a href="Cineluxe.php#popular">Popular</a></li>
        <li><a href="movies.php" class="home-active">Movie</a></li>
        <li class="genre-dropdown">
        <a href="#Genre">Genre <i class='bx bx-chevron-down'></i></a>
        <ul class="genre-menu">
            <li><a href="movies.php#Animation">Animation</a></li>
            <li><a href="movies.php#Adventure">Adventure</a></li>
            <li><a href="movies.php#Comedy">Comedy</a></li>
            <li><a href="movies.php#Fantasy">Fantasy</a></li>
            <li><a href="movies.php#Action">Action</a></li>
        </ul>
        </li>
        <li><a href="about.php">About us</a></li>
    </ul>

    <div class="search-box">
        <input type="text" placeholder="Search movies..." />
        <i class='bx bx-search'></i>
    </div>

    <a href="loginform.php" class="btn">Sign In</a>
</header>

<!-- ABOUT -->
<section class="about">
    <h2>About CineLuxe</h2>
    <p>
        <span>CineLuxe</span> is a modern movie platform built for movie lovers.
        We bring movies together in one clean and fast experience.
    </p>
    <p class="signature">— The CineLuxe Team 🎬</p>
</section>

<!-- REVIEWS -->
<section class="about">
    <h3 class="review-title">Leave a Review</h3>

    <!-- REVIEW BOX -->
    <div class="review-box">
        <div class="review-header">
            <img src="profil default instagram.jpg" alt="User Profile"> <!-- profile picture default -->
            <input type="text" id="username" placeholder="Your name">
        </div>

        <textarea id="comment" placeholder="Write your feedback..."></textarea>
        <button onclick="addReview()">Submit</button>
    </div>

    <!-- REVIEWS LIST -->
    <div class="ratings" id="reviewsList">
        <!-- Komente ekzistuese -->
        <div class="review-card">
            <img src="Rapunzel icon - Tangled (2010).jpg" alt="Alice">
            <div>
                <h4>Alice</h4>
                <p>Highly recommend to all movie lovers!</p>
            </div>
        </div>
        <div class="review-card">
            <img src="download (64).jpg" alt="Bob">
            <div>
                <h4>Bob</h4>
                <p>Great movies, very easy to navigate!</p>
            </div>
        </div>
        <div class="review-card">
            <img src="download (64).jpg" alt="Alice">
            <div>
                <h4>Emma</h4>
                <p>Perfect place to discover new favorites.</p>
            </div>
        </div>
        <div class="review-card">
            <img src="Cat_Kitty pics.jpg" alt="Alice">
            <div>
                <h4>Chloe</h4>
                <p>Five stars for CineLuxe! Keep it up!</p>
            </div>
        </div>
        <div class="review-card">
            <img src="download (67).jpg" alt="Alice">
            <div>
                <h4>Grace</h4>
                <p>Can’t wait for more movies to be added!</p>
            </div>
        </div>
        <div class="review-card">
            <img src="download (66).jpg" alt="Alice">
            <div>
                <h4>Olivia</h4>
                <p>Easy to use, looks amazing, love it.</p>
            </div>
        </div>
        <div class="review-card">
            <img src="download (65).jpg" alt="Alice">
            <div>
                <h4>Liam</h4>
                <p>I can spend hours here—so many great films!</p>
            </div>
        </div>
    </div>
    <!-- Load More Button -->
<div class="load-more-container">
    <button class="load-more-btn">Load More</button>
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





<script src="main.js"></script>
</body>
</html>