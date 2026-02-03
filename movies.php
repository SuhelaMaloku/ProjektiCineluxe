<?php
require_once 'Database.php';
require_once 'Movie.php';
include 'header.php';

$db = new Database();
$movieManager = new Movie($db);
$genres = ['Animation', 'Adventure', 'Fantasy', 'Comedy', 'Action'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies - CineLuxe</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net">
    <style>
        .movies-page { padding: 80px 7%; }
        .movies-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            margin-top: 20px;
        }
        .box { position: relative; }
        .box-img img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 15px;
        }
        .box-text { margin-top: 12px; }
        .box-text h3 { font-size: 1.1rem; color: #fff; margin: 0; }
        .box-text span { color: #e50914; font-size: 0.9rem; }
        .added-by { font-size: 0.7rem; color: #777; margin-top: 4px; }
        
        @media (max-width: 1024px) { .movies-container { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 600px) { .movies-container { grid-template-columns: repeat(1, 1fr); } }
    </style>
</head>
<body>
<section class="movies-page">
    <?php foreach ($genres as $genre): ?>
        <div id="<?php echo $genre; ?>" class="genre-section" style="margin-bottom: 50px; scroll-margin-top: 100px;">
            <h2 class="heading" style="color: #fff; border-bottom: 1px solid #e50914; margin-bottom: 20px; text-transform: uppercase;">
                <?php echo $genre; ?> Movies
            </h2>
            
            <div class="movies-container">
                <?php 
                $result = $movieManager->getMoviesByGenre($genre); 
                
                if($result && $result->num_rows > 0):
                    while($row = $result->fetch_assoc()): 
                ?>
                    <div class="box">
                        <div class="box-img">
                            <img src="<?php echo htmlspecialchars($row['image_url']); ?>" alt="Poster">
                        </div>
                        <div class="box-text">
                            <div style="display:flex; justify-content:space-between; align-items: center;">
                                <h3><?php echo htmlspecialchars($row['title']); ?></h3>
                                <a href="handle_action.php?action=watchlist&title=<?php echo urlencode($row['title']); ?>&image=<?php echo urlencode($row['image_url']); ?>">
                                    <i class='bx bxs-bookmark-plus' style="color:#e50914; font-size:20px;"></i>
                                </a>
                            </div>
                            <span><?php echo htmlspecialchars($row['genre']); ?></span>
                            
                            <p class="added-by" style="font-size: 0.7rem; color: #777; margin-top: 4px;">
                                Added by: <?php echo htmlspecialchars($row['added_by']); ?>
                            </p>
                        </div>
                    </div>
                <?php 
                    endwhile; 
                else:
                    echo "<p style='color: #555; font-size: 0.8rem; font-style: italic;'>Coming soon: $genre movies will be added shortly...</p>";
                endif;
                ?>
            </div>
        </div>
    <?php endforeach; ?>
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
            </div>
        </div>
        <div class="footer-newsletter">
            <h4>Stay Updated</h4>
            <input type="email" placeholder="Your email">
            <button>Subscribe</button>
        </div>
    </div>
    <div class="footer-copy">
        <p>© 1990-2025 CineLuxe.com, Inc. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
