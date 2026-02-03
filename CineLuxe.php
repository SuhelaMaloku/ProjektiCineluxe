<?php
session_start();

?>
<?php if ($_SESSION['role'] == 'admin'): ?>
    <button style="background: red;">Delete this Movie(Only for Admin)</button>
<?php endif; ?>

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
<?php include 'header.php'; ?>
<section class="home swiper" id="home">
    <div class="swiper-wrapper">
<div class="swiper-slide">
    <div class="container" id="madagascar">
        <img src="download (35)-Picsart-AiImageEnhancer.jpg" alt="Turning Red">

        <div class="home-text">
            <span>2022 Animation</span>
            <h1>Turning Red</h1>
            <div style="display:flex;align-items:center;gap:15px;">
                <a href="#" class="btn" 
                   data-trailer="https://www.youtube.com/watch?v=pqdHP2dWQ9M" 
                   data-title="Turning Red" 
                   data-desc="A teenage girl turns into a giant red panda whenever she gets too emotional.">
                   Watch Now
                </a>
                <a href="handle_action.php?action=watchlist&title=Turning Red&image=download (35)-Picsart-AiImageEnhancer.jpg">
                    <i class="bx bx-bookmark" style="font-size:2rem;color:#fff;cursor:pointer;"></i>
                </a>
            </div>
        </div>
        <a href="#" class="play" 
           data-trailer="https://www.youtube.com/watch?v=pqdHP2dWQ9M" 
           data-title="Turning Red">
            <i class="bx bx-play"></i>
        </a>
    </div>
</div>

     <div class="swiper-slide">
    <div class="container">
        <img src="lion 21.jpg" alt="The Lion King">
        <div class="home-text">
            <span>2019 Adventure</span>
            <h1>The Lion King</h1>
            <div style="display:flex;align-items:center;gap:15px;">
                <a href="#" class="btn" 
                   data-trailer="https://www.youtube.com/watch?v=7TavVZMewpY" 
                   data-title="The Lion King" 
                   data-desc="A young lion prince learns the true meaning of courage and responsibility.">
                   Watch Now
                </a>
                <a href="handle_action.php?action=watchlist&title=The Lion King&image=lion 21.jpg" title="Add to Watchlist">
                    <i class="bx bx-bookmark" style="font-size:2rem;color:#fff;cursor:pointer;"></i>
                </a>
            </div>
        </div>
        <a href="#" class="play" 
           data-trailer="https://www.youtube.com/watch?v=7TavVZMewpY" 
           data-title="The Lion King">
            <i class="bx bx-play"></i>
        </a>
    </div>
</div>
      <div class="swiper-slide">
    <div class="container">
        <img src="download (50).jpg" alt="Mulan">
        
        <div class="home-text">
            <span>2020 Action</span>
            <h1>MULAN</h1>
            <div style="display:flex;align-items:center;gap:15px;">
                <a href="#" class="btn" 
                   data-trailer="https://www.youtube.com/watch?v=KK8FHdFluOQ" 
                   data-title="MULAN" 
                   data-desc="A brave young woman disguises herself as a warrior to save her family.">
                   Watch Now
                </a>
                <a href="handle_action.php?action=watchlist&title=MULAN&image=download (50).jpg">
                    <i class="bx bx-bookmark" style="font-size:2rem;color:#fff;cursor:pointer;"></i>
                </a>
            </div>
        </div>
        <a href="#" class="play" 
           data-trailer="https://www.youtube.com/watch?v=KK8FHdFluOQ" 
           data-title="MULAN">
            <i class="bx bx-play"></i>
        </a>
    </div>
</div>
</section>
<section class="popular" id="popular">
    <h2 class="heading">Popular Ones</h2>
<div class="movies-container">
<div class="box">
    <div class="box-img">
        <img src="Alvin And the Chipmunks.jpg" data-title="Alvin And The Chipmunks" data-history="true" style="cursor:pointer;">
    </div>
    <div style="display:flex; justify-content:space-between; align-items: center; margin-top: 10px;">
        <h3>Alvin And The Chipmunks</h3>
        <a href="handle_action.php?action=watchlist&title=Alvin And The Chipmunks&image=Alvin And the Chipmunks.jpg">
            <i class='bx bxs-bookmark-plus' style="color:#ff0000; font-size:22px;"></i>
        </a>
    </div>
    <span>Animated</span>
</div>

<div class="box">
    <div class="box-img">
        <img src="download (5).jpg" data-title="The Grinch" data-history="true" style="cursor:pointer;">
    </div>
    <div style="display:flex; justify-content:space-between; align-items: center; margin-top: 10px;">
        <h3>The Grinch</h3>
        <a href="handle_action.php?action=watchlist&title=The Grinch&image=download (5).jpg">
            <i class='bx bxs-bookmark-plus' style="color:#ff0000; font-size:22px;"></i>
        </a>
    </div>
    <span>Animated</span>
</div>

<div class="box">
    <div class="box-img">
        <img src="download (9).jpg" data-title="Trolls" data-history="true" style="cursor:pointer;">
    </div>
    <div style="display:flex; justify-content:space-between; align-items: center; margin-top: 10px;">
        <h3>Trolls</h3>
        <a href="handle_action.php?action=watchlist&title=Trolls&image=download (9).jpg">
            <i class='bx bxs-bookmark-plus' style="color:#ff0000; font-size:22px;"></i>
        </a>
    </div>
    <span>Animated</span>
</div>

<div class="box">
    <div class="box-img">
        <img src="tom and jerry movie.jpg" data-title="Tom And Jerry" data-history="true" style="cursor:pointer;">
    </div>
    <div style="display:flex; justify-content:space-between; align-items: center; margin-top: 10px;">
        <h3>Tom And Jerry</h3>
        <a href="handle_action.php?action=watchlist&title=Tom And Jerry&image=tom and jerry movie.jpg">
            <i class='bx bxs-bookmark-plus' style="color:#ff0000; font-size:22px;"></i>
        </a>
    </div>
    <span>Animated</span>
</div>

<div class="box">
    <div class="box-img">
        <img src="Up_ Love love love this movie.jpg" data-title="UP" data-history="true" style="cursor:pointer;">
    </div>
    <div style="display:flex; justify-content:space-between; align-items: center; margin-top: 10px;">
        <h3>UP</h3>
        <a href="handle_action.php?action=watchlist&title=UP&image=Up_ Love love love this movie.jpg">
            <i class='bx bxs-bookmark-plus' style="color:#ff0000; font-size:22px;"></i>
        </a>
    </div>
    <span>Animated</span>
</div>

<div class="box">
    <div class="box-img">
        <img src="download (10).jpg" data-title="Paddington" data-history="true" style="cursor:pointer;">
    </div>
    <div style="display:flex; justify-content:space-between; align-items: center; margin-top: 10px;">
        <h3>Paddington</h3>
        <a href="handle_action.php?action=watchlist&title=Paddington&image=download (10).jpg">
            <i class='bx bxs-bookmark-plus' style="color:#ff0000; font-size:22px;"></i>
        </a>
    </div>
    <span>Animated</span>
</div>

<div class="box">
    <div class="box-img">
        <img src="insideout.jpg" data-title="Inside Out" data-history="true" style="cursor:pointer;">
    </div>
    <div style="display:flex; justify-content:space-between; align-items: center; margin-top: 10px;">
        <h3>Inside Out</h3>
        <a href="handle_action.php?action=watchlist&title=Inside Out&image=insideout.jpg">
            <i class='bx bxs-bookmark-plus' style="color:#ff0000; font-size:22px;"></i>
        </a>
    </div>
    <span>Animated</span>
</div>
<div class="box">
    <div class="box-img">
        <img src="Ice Age.jpg" data-title="Ice Age" data-history="true" style="cursor:pointer;">
    </div>
    <div style="display:flex; justify-content:space-between; align-items: center; margin-top: 10px;">
        <h3>Ice Age</h3>
        <a href="handle_action.php?action=watchlist&title=Ice Age&image=Ice Age.jpg">
            <i class='bx bxs-bookmark-plus' style="color:#ff0000; font-size:22px;"></i>
        </a>
    </div>
    <span>Animated</span>
</div>

<div class="box">
    <div class="box-img">
        <img src="download (6).jpg" data-title="Coco" data-history="true" style="cursor:pointer;">
    </div>
    <div style="display:flex; justify-content:space-between; align-items: center; margin-top: 10px;">
        <h3>Coco</h3>
        <a href="handle_action.php?action=watchlist&title=Coco&image=download (6).jpg">
            <i class='bx bxs-bookmark-plus' style="color:#ff0000; font-size:22px;"></i>
        </a>
    </div>
    <span>Animated</span>
</div>
<div class="box">
    <div class="box-img">
        <img src="download (20).jpg" data-title="Dumbo" data-history="true" style="cursor:pointer;">
    </div>
    <div style="display:flex; justify-content:space-between; align-items: center; margin-top: 10px;">
        <h3>Dumbo</h3>
        <a href="handle_action.php?action=watchlist&title=Dumbo&image=download (20).jpg">
            <i class='bx bxs-bookmark-plus' style="color:#ff0000; font-size:22px;"></i>
        </a>
    </div>
    <span>Animated</span>
</div>

<div class="box">
    <div class="box-img">
        <img src="download (39).jpg" data-title="Life of Pi" data-history="true" style="cursor:pointer;">
    </div>
    <div style="display:flex; justify-content:space-between; align-items: center; margin-top: 10px;">
        <h3>Life of Pi</h3>
        <a href="handle_action.php?action=watchlist&title=Life of Pi&image=download (39).jpg">
            <i class='bx bxs-bookmark-plus' style="color:#ff0000; font-size:22px;"></i>
        </a>
    </div>
    <span>Animated</span>
</div>
<div class="box">
    <div class="box-img">
        <img src="Walt Disney's Tangled movie poster US $11_99.jpg" data-title="Rapunzel" data-history="true" style="cursor:pointer;">
    </div>
    <div style="display:flex; justify-content:space-between; align-items: center; margin-top: 10px;">
        <h3>Rapunzel</h3>
        <a href="handle_action.php?action=watchlist&title=Rapunzel&image=Walt Disney's Tangled movie poster US $11_99.jpg">
            <i class='bx bxs-bookmark-plus' style="color:#ff0000; font-size:22px;"></i>
        </a>
    </div>
    <span>Animated</span>
</div>
</div>
    <div class="pagination">
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">Next &raquo;</a>
    </div>
</section>
<section class="coming" id="coming">
    <h2 class="heading">Coming Soon</h2>
    <div class="coming-container swiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="box-img"><img src="download (26).jpg" alt="Luca 3"></div>
                <div style="display:flex; justify-content:space-between; align-items: center; margin-top: 10px;">
                    <h3>Luca 3</h3>
                    <a href="handle_action.php?action=watchlist&title=Luca 3&image=download (26).jpg">
                        <i class='bx bxs-bookmark-plus' style="color:#ff0000; font-size:22px;"></i>
                    </a>
                </div>
                <span>Animated</span>
            </div>
            <div class="swiper-slide box">
                <div class="box-img"><img src="download (30).jpg" alt="Rio 2"></div>
                <div style="display:flex; justify-content:space-between; align-items: center; margin-top: 10px;">
                    <h3>Rio 2</h3>
                    <a href="handle_action.php?action=watchlist&title=Rio 2&image=download (30).jpg">
                        <i class='bx bxs-bookmark-plus' style="color:#ff0000; font-size:22px;"></i>
                    </a>
                </div>
                <span>Animated</span>
            </div>
            <div class="swiper-slide box">
                <div class="box-img"><img src="Ice Age (2002).jpg" alt="Ice Age 2"></div>
                <div style="display:flex; justify-content:space-between; align-items: center; margin-top: 10px;">
                    <h3>Ice Age 2</h3>
                    <a href="handle_action.php?action=watchlist&title=Ice Age 2&image=Ice Age (2002).jpg">
                        <i class='bx bxs-bookmark-plus' style="color:#ff0000; font-size:22px;"></i>
                    </a>
                </div>
                <span>Animated</span>
            </div>
            <div class="swiper-slide box">
                <div class="box-img"><img src="MOANA 2 - 2024.jpg" alt="Moana 2"></div>
                <div style="display:flex; justify-content:space-between; align-items: center; margin-top: 10px;">
                    <h3>Moana 2</h3>
                    <a href="handle_action.php?action=watchlist&title=Moana 2&image=MOANA 2 - 2024.jpg">
                        <i class='bx bxs-bookmark-plus' style="color:#ff0000; font-size:22px;"></i>
                    </a>
                </div>
                <span>Animated</span>
            </div>
            <div class="swiper-slide box">
                <div class="box-img"><img src="download (29).jpg" alt="The Lorax"></div>
                <div style="display:flex; justify-content:space-between; align-items: center; margin-top: 10px;">
                    <h3>The Lorax</h3>
                    <a href="handle_action.php?action=watchlist&title=The Lorax&image=download (29).jpg">
                        <i class='bx bxs-bookmark-plus' style="color:#ff0000; font-size:22px;"></i>
                    </a>
                </div>
                <span>Animated</span>
            </div>
            <div class="swiper-slide box">
                <div class="box-img"><img src="download (28).jpg" alt="The Snow Queen"></div>
                <div style="display:flex; justify-content:space-between; align-items: center; margin-top: 10px;">
                    <h3>The Snow Queen</h3>
                    <a href="handle_action.php?action=watchlist&title=The Snow Queen&image=download (28).jpg">
                        <i class='bx bxs-bookmark-plus' style="color:#ff0000; font-size:22px;"></i>
                    </a>
                </div>
                <span>Animated</span>
            </div>
            <div class="swiper-slide box">
                <div class="box-img"><img src="download (27).jpg" alt="Zootopia 2"></div>
                <div style="display:flex; justify-content:space-between; align-items: center; margin-top: 10px;">
                    <h3>Zootopia 2</h3>
                    <a href="handle_action.php?action=watchlist&title=Zootopia 2&image=download (27).jpg">
                        <i class='bx bxs-bookmark-plus' style="color:#ff0000; font-size:22px;"></i>
                    </a>
                </div>
                <span>Animated</span>
            </div>
            <div class="swiper-slide box">
                <div class="box-img"><img src="A Turtle’s Tale (2010).jpg" alt="A Turtle's Tale"></div>
                <div style="display:flex; justify-content:space-between; align-items: center; margin-top: 10px;">
                    <h3>A Turtle's Tale</h3>
                    <a href="handle_action.php?action=watchlist&title=A Turtle's Tale&image=A Turtle’s Tale (2010).jpg">
                        <i class='bx bxs-bookmark-plus' style="color:#ff0000; font-size:22px;"></i>
                    </a>
                </div>
                <span>Animated</span>
            </div>

        </div>
    </div>
</section>


<div class="trailer-modal" id="trailer-modal">
    <div class="trailer-content">
        <span class="close-btn" id="close-trailer">&times;</span>

        <div class="video-wrapper">
            <iframe id="trailer-video" width="100%" height="500" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="trailer-info">
            <h2 id="trailer-title"></h2>
            <p id="trailer-desc"></p>
        </div>
    </div>
</div>
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
            <input type="email" placeholder="Your email">
            <button>Subscribe</button>
        </div>
    </div>

    <div class="footer-copy">
        <p>© 1990-2025 CineLuxe.com, Inc. All rights reserved.</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="trailers.js?v=<?php echo time(); ?>"></script>
<script src="search.js?v=<?php echo time(); ?>"></script>
<script src="signin.js?v=<?php echo time(); ?>"></script>
<script src="main.js?v=<?php echo time(); ?>"></script>
<script>
document.addEventListener('click', function (e) {
    const el = e.target.closest('[data-title]');
    
    if (el) {
        const title = el.getAttribute('data-title');
        const box = el.closest('.box') || el.closest('.swiper-slide') || el.closest('.container');
        const img = box.querySelector('img');
        const imageName = img.src.split('/').pop();

        console.log("Adding to history: " + title);

        const params = new URLSearchParams();
        params.append('title', title);
        params.append('image', imageName);

        fetch('add_to_history.php', {
            method: 'POST',
            body: params
        })
        .then(res => res.text())
        .then(data => console.log("Status: " + data));
    }
});
</script>
</body>
</html>
