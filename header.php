<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineLuxe</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
<header class="home-header">
    <a href="CineLuxe.php" class="logo">
        <i class='bx bx-movie'></i> CineLuxe
    </a>
    <div class="bx bx-menu" id="menu-icon"></div>
    <ul class="navbar">
        <li><a href="Cineluxe.php#home" class="home-active">Home</a></li>
        <li><a href="Cineluxe.php#popular" class="home-active">Popular</a></li>
        <li><a href="movies.php">Movie</a></li>
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

    <div class="search-container">
        <div class="search-box">
            <input type="text" id="search-input" placeholder="Search a movie...">
            <i class='bx bx-search'></i>
        </div>
        <div id="search-results-container"></div>
    </div>
        <a href="loginform.php" class="btn">Sign In</a>
</header>
</body>
</html>