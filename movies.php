<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies - Cineluxe </title>
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
<section class="movies-page">
    <h2 class="heading">All Movies</h2>

    <!-- 🎬 Animation -->
    <h3 class="genre-title" id="Animation">Animation</h3>
    <div class="movies-container">
        <div class="box">
            <div class="box-img">
                <img src="Ratatouille 2007.jpg" alt="">
            </div>
            <h3>Ratatouille</h3>
            <span>Animation</span>
        </div>

        <div class="box">
            <div class="box-img">
                <img src="DISNEY ELEMENTAL MOVIE POSTER.jpg" alt="">
            </div>
            <h3>Elemental</h3>
            <span>Animation</span>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="WISH DRAGON Parents Guide + Movie Review.jpg" alt="">
        </div>
            <h3>Wish</h3>
            <span>Animation</span>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="Shaun the Sheep 2007 ‧ Animation ‧ 5 seasons.jpg" alt="">
        </div>
            <h3>Shaun the Sheep</h3>
            <span>Animation</span>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="Sherek_.jpg" alt="">
        </div>
            <h3>Shrek</h3>
            <span>Animation</span>
        </div>
         <div class="box">
            <div class="box-img">
                <img src="download (38).jpg" alt="">
        </div>
            <h3>Frozen</h3>
            <span>Animation</span>
        </div>
        
         <div class="box">
            <div class="box-img">
                <img src="Apple TV+ LUCK Parents Guide + Movie Review.jpg" alt="">
        </div>
            <h3>LUCK</h3>
            <span>Animation</span>
        </div>
        
         <div class="box">
            <div class="box-img">
                <img src="Walt Disney's Tangled movie poster US $11_99.jpg" alt="">
        </div>
            <h3>Tangled</h3>
            <span>Animation</span>
        </div>
        


    </div>
    <!-- Pagination statik -->
<div class="pagination">
    <a href="#" class="active">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">Next &raquo;</a>
</div>

    <!-- 🎬 Adventure -->
    <h3 class="genre-title" id="Adventure">Adventure</h3>
    <div class="movies-container">
        <div class="box">
            <div class="box-img">
                <img src="Mowgli_ Legend of the Jungle_ 2_6.jpg" alt="">
            </div>
            <h3>Mowgli</h3>
            <span>Adventure</span>
        </div>

        <div class="box">
            <div class="box-img">
                <img src="Dolittle - 2020.jpg" alt="">
            </div>
            <h3>Dolittle</h3>
            <span>Adventure</span>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="Belle et Sébastien de Nicolas Vanier_ Film….jpg" alt="">
            </div>
            <h3>Belle et Sébastien</h3>
            <span>Adventure</span>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="'Bridge To Terabithia' (2007).jpg" alt="">
            </div>
            <h3>Bridge to Terabithia</h3>
            <span>Adventure</span>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="_THE INCREDIBLES, 2004.jpg" alt="">
            </div>
            <h3>The Incredibles</h3>
            <span>Adventure</span>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="Movies.jpg" alt="">
            </div>
            <h3>Avatar</h3>
            <span>Adventure</span>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="Raya From Disney Movie.jpg" alt="">
            </div>
            <h3>Raya</h3>
            <span>Adventure</span>
        </div>
         <div class="box">
            <div class="box-img">
                <img src="Alice in Wonderland.jpg" alt="">
            </div>
            <h3>Alice in Wonderland</h3>
            <span>Adventure</span>
        </div>
        
    </div>
    <!-- Pagination statik -->
<div class="pagination">
    <a href="#" class="active">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">Next &raquo;</a>
</div>

    <!-- 🎬 Comedy -->
    <h3 class="genre-title" id="Comedy">Comedy</h3>
    <div class="movies-container">
        <div class="box">
            <div class="box-img">
                <img src="Baby's Day Out (1994).jpg" alt="">
            </div>
            <h3>Baby's Day Out</h3>
            <span>Comedy</span>
        </div>

        <div class="box">
            <div class="box-img">
                <img src="download (42).jpg" alt="">
            </div>
            <h3>The Spy Next Door</h3>
            <span>Comedy</span>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="PG 2010 ‧ Thriller_Action ‧ 1h 35m.jpg" alt="">
            </div>
            <h3>The Spy Next Door</h3>
            <span>Comedy</span>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="MR_ BEAN'S HOLIDAY - 2007 MOVIE POSTER ORIGINAL.jpg" alt="">
            </div>
            <h3>Mr Bean's Holiday</h3>
            <span>Comedy</span>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="Spy (2015) Rating 7_10.jpg" alt="">
            </div>
            <h3>Spy</h3>
            <span>Comedy</span>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="Rush Hour 3.jpg" alt="">
            </div>
            <h3>Rush Hour 3</h3>
            <span>Comedy</span>
        </div>
         <div class="box">
            <div class="box-img">
                <img src="Movie Poster.jpg" alt="">
            </div>
            <h3>Alvin and the Chipmunks</h3>
            <span>Comedy</span>
        </div>
         <div class="box">
            <div class="box-img">
                <img src="New official poster for JUMANJI_ THE NEXT LEVEL_.jpg" alt="">
            </div>
            <h3>Jumanji: The Next Level</h3>
            <span>Comedy</span>
        </div>
    </div>
    <!-- Pagination statik -->
<div class="pagination">
    <a href="#" class="active">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">Next &raquo;</a>
</div>
    <!-- 🎬 Fantasy -->

     <h3 class="genre-title" id="Fantasy">Fantasy</h3>
    <div class="movies-container"> 
         <div class="box">
            <div class="box-img">
                <img src="The Hobbit, an Unexpected Journey - Cross Stitch Pattern, Pdf Format, Delivered by Email, Movies Cross Stitch - Etsy.jpg" alt="">
            </div>
            <h3>The Hobbit</h3>
            <span>Fantasy</span>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="Marvel VENOM 11_ x 17_ Collector's Movie Poster ( T6 ) _ eBay.jpg" alt="">
            </div>
            <h3>VENOM</h3>
            <span>Fantasy</span>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="Masonic pillars (red & blue_sun and moon).jpg" alt="">
            </div>
            <h3>The Last Airbender</h3>
            <span>Fantasy</span>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="Mulan (2020).jpg" alt="">
            </div>
            <h3>Mulan</h3>
            <span>Fantasy</span>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="Maleficent  is a 2014 American dark fantasy film….jpg" alt="">
            </div>
            <h3>Maleficent</h3>
            <span>Fantasy</span>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="download (43).jpg" alt="">
            </div>
            <h3>Beauty and the Beast</h3>
            <span>Fantasy</span>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="Aladdin (2019).jpg" alt="">
            </div>
            <h3>Aladdin</h3>
            <span>Fantasy</span>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="Naar het boek De bijzondere kinderen van mevrouw….jpg" alt="">
            </div>
            <h3>Miss Peregrine's Home for Peculiar Children</h3>
            <span>Fantasy</span>
        </div>
    </div>
<!-- Pagination statik -->
<div class="pagination">
    <a href="#" class="active">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">Next &raquo;</a>
</div>

    <h3 class="genre-title" id="Action">Action</h3>
    <div class="movies-container">
        <div class="box">
            <div class="box-img">
                <img src="2 (2).jpg" alt="">
            </div>
            <h3>Bad Boys for Life</h3>
            <span>Action</span>
        </div>
               <div class="box">
            <div class="box-img">
                <img src="2 (6).jpg" alt="">
            </div>
            <h3>Fast and Furious</h3>
            <span>Action</span>
        </div>
               <div class="box">
            <div class="box-img">
                <img src="2 (4).jpg" alt="">
            </div>
            <h3>Forbidden Kingdom</h3>
            <span>Action</span>
        </div>
               <div class="box">
            <div class="box-img">
                <img src="2 (3).jpg" alt="">
            </div>
            <h3>Taken</h3>
            <span>Action</span>
        </div>
          <div class="box">
            <div class="box-img">
                <img src="movie.jpg" alt="">
            </div>
            <h3>Alpha</h3>
            <span>Action</span>
        </div>
          <div class="box">
            <div class="box-img">
                <img src="2 (5).jpg" alt="">
            </div>
            <h3>The Karate Kid</h3>
            <span>Action</span>
        </div>
          <div class="box">
            <div class="box-img">
                <img src="WONDER WOMAN starring Gal Gadot _ In theaters June 2, 2017.jpg" alt="">
            </div>
            <h3>Wonder Woman</h3>
            <span>Action</span>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="download (46).jpg" alt="">
            </div>
            <h3>Extraction</h3>
            <span>Action</span>
        </div>
        

    </div>
    <!-- Pagination statik -->
<div class="pagination">
    <a href="#" class="active">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">Next &raquo;</a>
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



</body>
</html>