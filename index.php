<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Spotifon</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="circle-preloader">
        <img src="img/core-img/compact-disc.png" alt="">
    </div>
</div>
<header class="header-area">
    <div class="musica-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container-fluid">
                <nav class="classy-navbar justify-content-between" id="musicaNav">
                    <a href="index.php" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
                    <div class="classy-menu">
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <div class="classynav">
                            <ul>
                                <li><a href="index.php"> <i class="fa-sharp fa-solid fa-house"></i> Home</a></li>
                                <li><a href="php/topCharts.php"><i class="fa-solid fa-fire"></i> Top Charts</a></li>
                                <li><a href="php/NewTrack.php"><i class="fa-solid fa-square-arrow-up-right"></i> New Tracks</a></li>
                                <li><a href="php/UkraineHits.php"><img src="https://www.5.ua/media/pictures/original/146560.jpg?t=1534932390" alt="UK" width="20px"> Ukraine Hits</a></li>
                                <li><a href="#">Genres</a>
                                    <ul class="dropdown">
                                        <li><a href="php/RapHits.php">Rap</a></li>
                                        <li><a href="php/PopHits.php">Pop</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <a href="php/login.php" class="btn musica-btn btn-3 m-2 CLICKbtn">Login</a>
                            <a href="php/register.php" class="btn musica-btn btn-3 m-2 CLICKbtn">Sign up</a>
                            <form method="post">
                            <button type="submit" name="exits"   id="exitBTN" class="btn musica-btn btn-3 m-2 exit" style="visibility: hidden" > Exit</button>
                            </form>
                            <?php include "php/config.php"; checkLog();?>
                            <a href="php/setUp.php"> <i class="fa-sharp fa-solid fa-gear"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<section class="hero-area">
    <div class="hero-slides owl-carousel">
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-1.jpg);"></div>
            <div class="hero-slides-content text-center">
                <h2 data-animation="fadeInUp" data-delay="100ms">Spotifon<span>Spotifon</span></h2>
                <p data-animation="fadeInUp" data-delay="300ms">Music for you</p>
            </div>
            <h2 class="big-text">Spotifon</h2>
        </div>
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-2.jpg);"></div>
            <div class="hero-slides-content text-center">
                <h2 data-animation="fadeInUp" data-delay="100ms">Spotifon<span>Spotifon</span></h2>
                <p data-animation="fadeInUp" data-delay="300ms">Top music</p>
            </div>
            <h2 class="big-text">Spotifon</h2>
        </div>
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-3.jpg);"></div>
            <div class="hero-slides-content text-center">
                <h2 data-animation="fadeInUp" data-delay="100ms">Spotifon<span>Spotifon</span></h2>
                <p data-animation="fadeInUp" data-delay="300ms">New music</p>
            </div>
            <h2 class="big-text">Spotifon</h2>
        </div>
    </div>
    <div class="bg-gradients"></div>
    <div class="slide-down" id="scrollDown">
        <h6>Slide Down</h6>
        <div class="line"></div>
    </div>
</section>
<div class="music-player-area section-padding-100">
    <div class="container-fluid" id="about">
        <div class="row">
            <div class="col-12">
                <div class="music-player-slides owl-carousel">
                    <div class="single-music-player">
                        <img src="img/bg-img/TrackImg/DrakeNonstop.jpg" alt="">
                        <div class="music-info d-flex justify-content-between">
                            <div class="music-text">
                                <h5>Drake</h5>
                                <p>Nonstop</p>
                            </div>
                            <div class="music-play-icon">
                                <audio preload="auto" controls>
                                    <source src="audio/Drake - Nonstop.mp3">
                                </audio>
                            </div>
                        </div>
                    </div>
                    <div class="single-music-player">
                        <img src="img/bg-img/TrackImg/ArrDeeFlowers.png" alt="">
                        <div class="music-info d-flex justify-content-between">
                            <div class="music-text">
                                <h5>ArrDee</h5>
                                <p>Flowers</p>
                            </div>
                            <div class="music-play-icon">
                                <audio preload="auto" controls>
                                    <source src="audio/arrdee-flowers-say-my-name.mp3">
                                </audio>
                            </div>
                        </div>
                    </div>
                    <div class="single-music-player">
                        <img src="img/bg-img/TrackImg/N9neFaceOff.jpg" alt="">
                        <div class="music-info d-flex justify-content-between">
                            <div class="music-text">
                                <h5>Tech N9ne,Joey Cool,King Iso, Dwayne,Jonson</h5>
                                <p>Face Off</p>
                            </div>
                            <div class="music-play-icon">
                                <audio preload="auto" controls>
                                    <source src="audio/Tech N9ne, Joey Cool, King Iso, Dwayne Johnson - Face Off.mp3">
                                </audio>
                            </div>
                        </div>
                    </div>
                    <div class="single-music-player">
                        <img src="img/bg-img/TrackImg/JuiceWRLDcigarettes.jpg" alt="">
                        <div class="music-info d-flex justify-content-between">
                            <div class="music-text">
                                <h5>Juice WRLD</h5>
                                <p>Cigarettes</p>
                            </div>
                            <div class="music-play-icon">
                                <audio preload="auto" controls>
                                    <source src="audio/JuiceWRLD-cigaretes.mp3">
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="featured-album-area section-padding-100 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="featured-album-content d-flex flex-wrap">
                    <div class="album-thumbnail h-100 bg-img"
                         style="background-image: url(img/bg-img/TrackImg/DrakeNonstop.jpg);"></div>
                    <div class="album-songs h-100">
                        <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between">
                            <div class="album-title">
                                <h6>New Track of Week</h6>
                                <h4>listen interesting music</h4>
                            </div>
                            <div class="album-buy-now">
                                <a href="php/topCharts.php" class="btn musica-btn">Details</a>
                            </div>
                        </div>
                        <div class="album-all-songs">
                            <div class="music-playlist">
                                <div class="single-music">
                                    <h6>Drake - Nonstop</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/Drake - Nonstop.mp3">
                                    </audio>
                                </div>
                                <div class="single-music">
                                    <h6>ArrDee - Flowers</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/arrdee-flowers-say-my-name.mp3">
                                    </audio>
                                </div>
                                <div class="single-music">
                                    <h6>Tech N9ne... - Face Off</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/Tech N9ne, Joey Cool, King Iso, Dwayne Johnson - Face Off.mp3">
                                    </audio>
                                </div>
                                <div class="single-music">
                                    <h6>Juice WRLD - Cigaretes</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/JuiceWRLD-cigaretes.mp3">
                                    </audio>
                                </div>
                                <div class="single-music">
                                    <h6>Lil Durk - Hanging</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/Lil-Durk-Hanging-With-Wolves-(HiphopKit.com).mp3">
                                    </audio>
                                </div>
                                <div class="single-music">
                                    <h6>Central Cee - Let Go</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/central-cee-let-go_456242163.mp3">
                                    </audio>
                                </div>
                                <div class="single-music">
                                    <h6>Drake, 21 Savage - Rich Flex</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/21-savage-x-drake-rich-flex_456245357.mp3">
                                    </audio>
                                </div>
                                <div class="single-music">
                                    <h6>Message to my future self</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/dummy-audio.mp3">
                                    </audio>
                                </div>
                                <div class="single-music">
                                    <h6>Armani White - Billie Eilish.</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/armani-white-billie-eilish_456240087.mp3">
                                    </audio>
                                </div>
                                <div class="single-music">
                                    <h6>lil Yachty - Poland</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/lil-yachty-poland_456241438.mp3">
                                    </audio>
                                </div>
                                <div class="single-music">
                                    <h6>Marshmello, Juice WRLD - Bye Bye</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/marshmello-amp-juice-wrld-bye-bye_456245133.mp3">
                                    </audio>
                                </div>
                            </div>
                        </div>
                        <div class="now-playing d-flex flex-wrap align-items-center justify-content-between ">
                            <div class="mainPlaylist">
                            <div class="songs-name ">
                                <p>Playing</p>
                                <h6>Drop that beat</h6>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="musica-music-artists-area d-flex flex-wrap clearfix">
    <div class="music-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="300ms"
         style="background-image: url(img/bg-img/bg-8.jpg);">
        <div class="music-search-content">
            <h2>Music</h2>
            <h4>Search for the best music</h4>
        </div>
    </div>
    <div class="artists-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="600ms"
         style="background-image: url(img/bg-img/bg-1.jpg);">
        <div class="music-search-content">
            <h2>Artists</h2>
            <h4>Search for the best artists</h4>
        </div>
    </div>
</div>
<footer class="footer-area section-padding-100-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-3">
                <div class="footer-widget-area mb-100">
                    <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-xl-2">
                <div class="footer-widget-area mb-100">
                    <div class="widget-title">
                        <h4>Menu</h4>
                    </div>
                    <nav>
                        <ul class="footer-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="php/topCharts.php">Top Charts</a></li>
                            <li><a href="php/NewTrack.php">New Track</a></li>
                            <li><a href="php/UkraineHits.php">Ukraine Hits</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-xl-2">
                <div class="footer-widget-area mb-100">
                    <div class="widget-title">
                        <h4>Spotify</h4>
                    </div>
                    <nav>
                        <ul class="footer-nav">
                            <li><a href="https://open.spotify.com/playlist/5BD7I98DmJShRfVOb6E4T0?si=4a05ecf1b5184a93">Home</a>
                            </li>
                            <li><a href="https://open.spotify.com/playlist/0n5tTNtf1IEgYVr8JjTkir?si=78d3c353319242ca">Top
                                    charts</a></li>
                            <li><a href="https://open.spotify.com/playlist/741FeMExgDbsBSTrlyMJaR?si=46e61da7d43c41d4">New
                                    Track</a></li>
                            <li><a href="https://open.spotify.com/playlist/37i9dQZEVXbKkidEfWYRuD?si=8fbee717d60a41e1">Ukraine
                                    Hits</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-xl-2">
                <div class="footer-widget-area mb-100">
                    <div class="widget-title">
                        <h4>Social</h4>
                    </div>
                    <nav>
                        <ul class="footer-nav">
                            <li><a href="https://www.facebook.com/profile.php?id=100004863288322">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Telegram</a></li>
                            <li><a href="https://www.instagram.com/hot_boy_549/?hl=ru">Instagram</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="footer-widget-area mb-100">
                    <div class="widget-title">
                        <h4>Callback</h4>
                    </div>
                    <form action="#" method="post" class="subscribe-form">
                        <input type="email" name="subscribe-email" id="subscribeemail">
                        <button type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap/popper.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/plugins/plugins.js"></script>
<script src="js/active.js"></script>
<script src="https://kit.fontawesome.com/dc743da7f2.js" crossorigin="anonymous"></script>
</body>
</html>
