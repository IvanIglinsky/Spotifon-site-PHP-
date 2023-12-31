<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Spotifon</title>
    <link rel="icon" href="../img/core-img/favicon.ico">
    <link rel="stylesheet" href="../style.css">

</head>
<body>
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="circle-preloader">
        <img src="../img/core-img/compact-disc.png" alt="">
    </div>
</div>
<header class="header-area">
    <div class="musica-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container-fluid">
                <nav class="classy-navbar justify-content-between" id="musicaNav">
                    <a href="index.php" class="nav-brand"><img src="../img/core-img/logo.png" alt=""></a>
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
                    <div class="classy-menu">
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <div class="classynav">
                            <ul>
                                <li><a href="../index.php"> <i class="fa-sharp fa-solid fa-house"></i> Home</a></li>
                                <li><a href="topCharts.php"><i class="fa-solid fa-fire"></i> Top Charts</a></li>
                                <li><a href="NewTrack.php"><i class="fa-solid fa-square-arrow-up-right"></i> New Tracks</a>
                                </li>
                                <li><a href="UkraineHits.php"><img
                                                src="https://www.5.ua/media/pictures/original/146560.jpg?t=1534932390"
                                                alt="UK" width="20px"> Ukraine Hits</a></li>
                                <li><a href="#">Genres</a>
                                    <ul class="dropdown">
                                        <li><a href="RapHits.php">Rap</a></li>
                                        <li><a href="PopHits.php">Pop</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <a href="login.php" class="btn musica-btn btn-3 m-2 CLICKbtn">Login</a>
                            <a href="register.php" class="btn musica-btn btn-3 m-2 CLICKbtn">Sign up</a>
                            <form method="post">
                                <button type="submit" name="exits" id="exitBTN" class="btn musica-btn btn-3 m-2 exit"
                                        style="visibility: hidden"> Exit
                                </button>
                            </form>
                            <?php include "config.php";
                            checkLog(); ?>
                            <a href="setUp.php"> <i class="fa-sharp fa-solid fa-gear"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(../img/bg-img/breadcumb.jpg);">
    <div class="bradcumbContent">
        <h2>Top charts</h2>
    </div>
</div>
<div class="bg-gradients"></div>
<div class="career-timeline-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="featured-album-content d-flex flex-wrap">
                    <div class="album-songs" style="max-width: 100%;flex: 0 0 100%">
                        <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between">
                            <div class="album-all-songs">
                                <div class="music-playlist topChart">
                                    <!--                                    <script >-->
                                    <!--                                        async function getJson1() {-->
                                    <!--                                            let resp =  await fetch('../package.json')-->
                                    <!--                                            let names =  await resp.json();-->
                                    <!--                                            for (let i = 0; i < names.TopChart[0].name.length; i++) {-->
                                    <!--                                                let playlistTopChart = document.querySelector("div.topChart")-->
                                    <!--                                                let SingleMusic = document.createElement('div');-->
                                    <!--                                                SingleMusic.className='single-music';-->
                                    <!--                                                let Name = document.createElement('h6');-->
                                    <!--                                                Name.innerHTML=names.TopChart[0].name[i];-->
                                    <!--                                                SingleMusic.appendChild(Name);-->
                                    <!--                                                let audioSing=document.createElement('audio');-->
                                    <!--                                                audioSing.preload='auto';-->
                                    <!--                                                let source=document.createElement('source');-->
                                    <!--                                                source.src=names.TopChart[0].way[i];-->
                                    <!--                                                let button=document.createElement('a')-->
                                    <!--                                                button.innerHTML='download'-->
                                    <!--                                                button.href=names.TopChart[0].way[i];-->
                                    <!--                                                button.download=''-->
                                    <!--                                                audioSing.appendChild(source);-->
                                    <!--                                                SingleMusic.appendChild(audioSing);-->
                                    <!--                                                SingleMusic.appendChild(button)-->
                                    <!--                                                playlistTopChart.append(SingleMusic)-->
                                    <!--                                            }-->
                                    <!--                                        }-->
                                    <!--                                            getJson1();-->
                                    <!---->
                                    <!--                                    </script>-->

                                    <div class="single-music">
                                        <a href="../audio/Drake%20-%20Nonstop.mp3" download=""><h6>Drake - Nonstop</h6></a>
                                        <audio preload="auto" controls>
                                            <source src="../audio/Drake%20-%20Nonstop.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music">
                                        <a href="../audio/arrdee-flowers-say-my-name.mp3" download=""><h6>ArrDee - Flowers</h6></a>
                                        <audio preload="auto" controls>
                                            <source src="../audio/arrdee-flowers-say-my-name.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music">
                                        <a href="../audio/Tech%20N9ne,%20Joey%20Cool,%20King%20Iso,%20Dwayne%20Johnson%20-%20Face%20Off.mp3" download=""><h6>Tech N9ne... - Face Off</h6></a>
                                        <audio preload="auto" controls>
                                            <source src="../audio/Tech%20N9ne,%20Joey%20Cool,%20King%20Iso,%20Dwayne%20Johnson%20-%20Face%20Off.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music">
                                        <a href="../audio/JuiceWRLD-cigaretes.mp3"download=""><h6>Juice WRLD - Cigaretes</h6></a>
                                        <audio preload="auto" controls>
                                            <source src="../audio/JuiceWRLD-cigaretes.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music">
                                        <a href="../audio/Lil-Durk-Hanging-With-Wolves-(HiphopKit.com).mp3" download=""><h6>Lil Durk - Hanging</h6></a>
                                        <audio preload="auto" controls>
                                            <source src="../audio/Lil-Durk-Hanging-With-Wolves-(HiphopKit.com).mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music">
                                        <a href="../audio/central-cee-let-go_456242163.mp3" download=""><h6>Central Cee - Let Go</h6></a>
                                        <audio preload="auto" controls>
                                            <source src="../audio/central-cee-let-go_456242163.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music">
                                        <a href="../audio/21-savage-x-drake-rich-flex_456245357.mp3" download=""> <h6>Drake, 21 Savage - Rich Flex</h6></a>
                                        <audio preload="auto" controls>
                                            <source src="../audio/21-savage-x-drake-rich-flex_456245357.mp3">
                                        </audio>
                                    </div>

                                    <div class="single-music">
                                        <a href="../audio/armani-white-billie-eilish_456240087.mp3" download=""><h6>Armani White - Billie Eilish</h6></a>
                                        <audio preload="auto" controls>
                                            <source src="../audio/armani-white-billie-eilish_456240087.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music">
                                        <a href="../audio/lil-yachty-poland_456241438.mp3" download=""> <h6>lil Yachty - Poland</h6></a>
                                        <audio preload="auto" controls>
                                            <source src="../audio/lil-yachty-poland_456241438.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music">
                                        <a href="../audio/marshmello-amp-juice-wrld-bye-bye_456245133.mp3"download="">  <h6>Marshmello, Juice WRLD - Bye Bye</h6></a>
                                        <audio preload="auto" controls>
                                            <source src="../audio/marshmello-amp-juice-wrld-bye-bye_456245133.mp3">
                                        </audio>
                                    </div>
                                    <div class="single-music">
                                        <a href="../audio/New%20track/future-wait-for-u-feat.-drake-amp-tems_456240306.mp3" download="">  <h6>Future - Wait for u </h6></a>
                                        <audio preload="auto" controls>
                                            <source src="../audio/New%20track/future-wait-for-u-feat.-drake-amp-tems_456240306.mp3">
                                        </audio>
                                    </div>
                                </div>
                            </div>

                            <div class="now-playing d-flex flex-wrap align-items-center justify-content-between">
                                <div class="songs-name">
                                    <p>Playing</p>
                                    <h6>Drake - Nonstop</h6>

                                </div>
                                <audio preload="auto" controls>
                                    <source src="../audio/Drake%20-%20Nonstop.mp3">
                                </audio>

                            </div>
                            <i class="fa-sharp fa-solid fa-plus" id="plus" onclick="addNewTrack();"></i>
                            <?php openAddTrack(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="first-img">
        <img src="../img/bg-img/man.png" alt="">
    </div>
    <div class="second-img">
        <img src="../img/bg-img/microphone.png" alt="">
    </div>
</div>
<div class="discography-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading dark">
                    <h2>discography</h2>
                    <h6>Popular music cover </h6>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="discography-slides owl-carousel">
                    <div class="single-discography">
                        <a href="#"><img src="../img/bg-img/TrackImg/JuiceWRLDcigarettes.jpg" alt=""></a>
                    </div>
                    <div class="single-discography">
                        <a href="#"><img src="../img/bg-img/TrackImg/DrakeNonstop.jpg" alt=""></a>
                    </div>
                    <div class="single-discography">
                        <a href="#"><img src="../img/bg-img/TrackImg/ArrDeeFlowers.png" alt=""></a>
                    </div>
                    <div class="single-discography">
                        <a href="#"><img src="../img/bg-img/TrackImg/N9neFaceOff.jpg" alt=""></a>
                    </div>
                    <div class="single-discography">
                        <a href="#"><img src="../img/bg-img/TrackImg/CentralCee.png" alt=""></a>
                    </div>
                    <div class="single-discography">
                        <a href="#"><img src="../img/bg-img/TrackImg/LilYachy%20Poland.jfif" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="musica-cta-area section-padding-100 bg-img bg-overlay2"
     style="background-image: url(../img/bg-img/bg-8.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta-content">
                    <div class="cta-text">
                        <span>This is Way to see a</span>
                        <h2>Top music</h2>
                        <h4>Search for the best music</h4>
                    </div>
                    <div class="cta-btn mt-30">
                        <a href="topCharts.php" class="btn musica-btn">Search</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer-area section-padding-100-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-3">
                <div class="footer-widget-area mb-100">
                    <a href="#"><img src="../img/core-img/logo2.png" alt=""></a>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-xl-2">
                <div class="footer-widget-area mb-100">
                    <div class="widget-title">
                        <h4>Menu</h4>
                    </div>
                    <nav>
                        <ul class="footer-nav">
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="topCharts.php">Top Charts</a></li>
                            <li><a href="NewTrack.php">New Track</a></li>
                            <li><a href="UkraineHits.php">Ukraine Hits</a></li>
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
                            <li><a href="https://www.instagram.com/hot_boy_549/?hl=ru">Instagram </a></li>
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
<script src="../js/jquery/jquery-2.2.4.min.js"></script>
<script src="../js/bootstrap/popper.min.js"></script>
<script src="../js/bootstrap/bootstrap.min.js"></script>
<script src="../js/plugins/plugins.js"></script>
<script src="../js/active.js"></script>
<script src="https://kit.fontawesome.com/dc743da7f2.js" crossorigin="anonymous"></script>
</body>
</html>