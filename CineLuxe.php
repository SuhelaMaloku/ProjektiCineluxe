<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineLuxe</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>
<body>
<header>
    <a href="CineLuxe.html" class="logo">
        <i class='bx bx-movie'></i> CineLuxe
    </a>

    <div class="bx bx-menu" id="menu-icon"></div>

    <ul class="navbar">
        <li><a href="Cineluxe.php#home">Home</a></li>
        <li><a href="Cineluxe.php#popular">Popular</a></li>
        <li><a href="movies.html" class="home-active">Movie</a></li>
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
   <section class="home swiper" id="home">

    <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="container">
            <img src="Madagascar (1)-Picsart-AiImageEnhancer.jpg" alt="">
            <div class="home-text">
                <span>2012 Animated</span>
                <h1>Madagascar</h1>
                <a href="#" class="btn">Watch Now</a>
                <a href="#" class="play"><i class="bx bx-play"></i></a>
            </div> 
        </div>
        </div>

        <div class="swiper-slide">
          <div class="container">
            <img src="download (34)-Picsart-AiImageEnhancer.jpg" alt="">
            <div class="home-text">
                <span>2017 Animated</span>
                <h1>Cars</h1>
                <a href="#" class="btn">Watch Now</a>
                <a href="#" class="play"><i class="bx bx-play"></i></a>
            </div>
        </div>
        </div>

        <div class="swiper-slide">
          <div class="container">
            <img src="download (35)-Picsart-AiImageEnhancer.jpg">
            <div class="home-text">
                <span>2022 Animated</span>
                <h1>Turning Red</h1>
                <a href="#" class="btn">Watch Now</a>
                <a href="#" class="play"><i class="bx bx-play"></i></a>
            </div>
        </div>
        </div>
        

    </div>

    <div class="swiper-pagination"></div>

</section>
<section class="movies" id="movies">
    <h2 class="heading">Popular Ones</h2>
    <div class="movies-container">
         <div class="box">
        <div class="box-img">
        <img src="Alvin And the Chipmunks.jpg" alt="">
    </div>
    <h3>Alvin And The Chipmunks</h3>
    <span>Animated</span>
    </div> 


     <div class="box">
        <div class="box-img">
        <img src="download (5).jpg" alt="">
    </div>
    <h3>The Grinch</h3>
    <span>Animated</span>
    </div>


     <div class="box">
        <div class="box-img">
        <img src="download (9).jpg" alt="">
    </div>
    <h3>Trolls</h3>
    <span>Animated</span>
    </div>
   

     <div class="box">
        <div class="box-img">
        <img src="tom and jerry movie.jpg" alt="">
    </div>
    <h3>Tom And Jerry</h3>
    <span>Animated</span>
    </div>



     <div class="box">
        <div class="box-img">
        <img src="Up_ Love love love this movie.jpg" alt="">
    </div>
    <h3>UP</h3>
    <span>Animated</span>
    </div>


     <div class="box">
        <div class="box-img">
        <img src="download (10).jpg" alt="">
    </div>
    <h3>Paddington</h3>
    <span>Animated</span>
    </div>


     <div class="box">
        <div class="box-img">
        <img src="Inside Out 2 Parents Guide + Movie Review.jpg" alt="">
    </div>
    <h3>Inside Out</h3>
    <span>Animated</span>
    </div>


     <div class="box">
        <div class="box-img">
        <img src="Ice Age.jpg" alt="">
    </div>
    <h3>Ice Age</h3>
    <span>Animated</span>
    </div>


     <div class="box">
        <div class="box-img">
        <img src="download (6).jpg" alt="">
    </div>
    <h3>Coco</h3>
    <span>Animated</span>
    </div>


     <div class="box">
        <div class="box-img">
        <img src="download (20).jpg" alt="">
    </div>
    <h3>Dumbo</h3>
    <span>Animated</span>
    </div>


    </div>
</section>
<section class ="coming" id="coming">
    <h2 class="heading">Coming Soon</h2>
    <div class="coming-container swiper">
        <div class="swiper-wrapper">



        <div class="swiper-slide box">
        <div class="box-img">
        <img src="download (26).jpg" alt="">
    </div>
    <h3>Luca 3</h3>
    <span>Animated</span>
    </div> 


     <div class="swiper-slide box">
        <div class="box-img">
        <img src="download (30).jpg" alt="">
    </div>
    <h3>Rio 2</h3>
    <span>Animated</span>
    </div>


     <div class="swiper-slide box">
        <div class="box-img">
        <img src="Ice Age (2002).jpg" alt="">
    </div>
    <h3>Ice Age 2</h3>
    <span>Animated</span>
    </div>
   

     <div class="swiper-slide box">
        <div class="box-img">
        <img src="MOANA 2 - 2024.jpg" alt="">
    </div>
    <h3>Moana 2</h3>
    <span>Animated</span>
    </div>



     <div class="swiper-slide box">
        <div class="box-img">
        <img src="download (29).jpg" alt="">
    </div>
    <h3>The Lorax</h3>
    <span>Animated</span>
    </div>


     <div class="swiper-slide box">
        <div class="box-img">
        <img src="download (28).jpg" alt="">
    </div>
    <h3>The Snow Queen & The Princess</h3>
    <span>Animated</span>
    </div>


     <div class="swiper-slide box">
        <div class="box-img">
        <img src="download (27).jpg" alt="">
    </div>
    <h3>Zootopia 2</h3>
    <span>Animated</span>
    </div>


     <div class="swiper-slide box">
        <div class="box-img">
        <img src="A Turtle’s Tale (2010).jpg" alt="">
    </div>
    <h3>A Turtle's Tale </h3>
    <span>Animated</span>
    </div>


     <div class="swiper-slide box">
        <div class="box-img">
        <img src="Toy Story 4.jpg">
    </div>
    <h3>Toy Story 4</h3>
    <span>Animated</span>
    </div>


     <div class="swiper-slide box">
        <div class="box-img">
        <img src="Flynn Rider & Rapunzel.jpg" alt="">
    </div>
    <h3>Tangled Ever After</h3>
    <span>Animated</span>
    </div>
    </div>
    </div>
</section>
<section class="about" id="about">
    <div class="about-container">
        <h2>About Us</h2>
        <p>
            At <span>CineLuxe</span>, we bring the magic of movies to life.
            Our mission is to offer users a beautiful, fast , and immersive movie browsing experience.
            From animated classics to the latest blockbusters,we aim to provide a platform where
            everyone can discover their next favorite film.
        </p>
        <p class="signature"> The Cineluxe Team :* </p> 

    </div>

</section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="main.js"></script>
</body>
</html>