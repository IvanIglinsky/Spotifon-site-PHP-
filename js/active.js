(function ($) {
    'use strict';
    let browserWindow = $ ( window );
    browserWindow.on('load', function () {
        $('.preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });
    if ($.fn.classyNav) {
        $('#musicaNav').classyNav();
    }

    if ($.fn.owlCarousel) {
        let welcomeSlide = $('.hero-slides');
        let featured_shows = $('.featured-shows-slides');
        let music_player = $('.music-player-slides');
        let discography = $('.discography-slides');

        welcomeSlide.owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 7000,
            smartSpeed: 1000,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut'
        });

        welcomeSlide.on('translate.owl.carousel', function () {
            let slideLayer = $("[data-animation]");
            slideLayer.each(function () {
                let anim_name = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name).css('opacity', '0');
            });
        });

        welcomeSlide.on('translated.owl.carousel', function () {
            let slideLayer = welcomeSlide.find('.owl-item.active').find("[data-animation]");
            slideLayer.each(function () {
                let anim_name = $(this).data('animation');
                $(this).addClass('animated ' + anim_name).css('opacity', '1');
            });
        });

        $("[data-delay]").each(function () {
            let anim_del = $(this).data('delay');
            $(this).css('animation-delay', anim_del);
        });

        $("[data-duration]").each(function () {
            let anim_dur = $(this).data('duration');
            $(this).css('animation-duration', anim_dur);
        });

        featured_shows.owlCarousel({
            items: 3,
            margin: 30,
            loop: true,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 600,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });

        music_player.owlCarousel({
            items: 3,
            margin: 45,
            loop: true,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 750,
            responsive: {
                0: {
                    items: 1
                },
                992: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });

        discography.owlCarousel({
            items: 6,
            margin: 30,
            loop: true,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 600,
            responsive: {
                0: {
                    items: 2
                },
                768: {
                    items: 4
                },
                992: {
                    items: 6
                }
            }
        });
    }
    if ($.fn.scrollUp) {
        browserWindow.scrollUp({
            scrollSpeed: 1500,
            scrollText: '<i class="fa fa-angle-up"></i>'
        });
    }
    if ($.fn.counterUp) {
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });
    }
    if ($.fn.sticky) {
        $(".musica-main-menu").sticky({
            topSpacing: 0
        });
    }



    if ($.fn.audioPlayer) {
        $('audio').audioPlayer();
    }

    if ($.fn.tooltip) {
        $('[data-toggle="tooltip"]').tooltip()
    }


    if ($.fn.niceScroll) {
        $(".album-all-songs").niceScroll({
            background: "#fff"
        });
    }


    $("#scrollDown").on('click', function () {
        $('html, body').animate({
            scrollTop: $("#about").offset().top - 85
        }, 1500);
    });


    $('a[href="#"]').on('click', function ($) {
        $.preventDefault();
    });
    if (browserWindow.width() > 767) {
        new WOW().init();
    }

})(jQuery);

let playlist=document.querySelectorAll("div.single-music");
let nowPlay=document.querySelector('div.now-playing');
for (let elem of playlist){
    elem.children[1].querySelector("div.audioplayer-playpause").onclick=changeTrack;
    // nowPlay.children[1].children[2].innerHTML=elem.children[1].innerHTML;
    nowPlay.children[1].innerHTML=elem.children[1].innerHTML
}

function changeTrack(){
    this.parentElement.parentElement.classList.toggle("active")
    nowPlay.children[1].innerHTML=this.parentElement.parentElement.children[1].innerHTML
    nowPlay.children[0].children[1].innerHTML=this.parentElement.parentElement.children[0].innerHTML;
    nowPlay.children[1].children[2].innerHTML=this.parentElement.parentElement.children[1].children[2].innerHTML;
    nowPlay.children[1].innerHTML=this.parentElement.parentElement.children[1].innerHTML

}


function addNewTrack(){
    let newMusic=document.createElement('div');
    newMusic.className='single-music';
    let inputH6=document.createElement('input');
    let inputMusic=document.createElement('input');
    inputMusic.className='btn musica-btn btn-3 m-2';
    inputMusic.type='file';
    inputMusic.accept='audio/mp3'
    inputMusic.style.color='white';
    inputMusic.style.marginLeft='10px';
    let send=document.createElement('i');
    send.className="fa-sharp fa-solid fa-check";
    inputH6.type='text';
    inputH6.style.width='250px';
    newMusic.appendChild(inputH6)
    newMusic.appendChild(inputMusic);
    newMusic.appendChild(send);
    let musicPlaylist=document.querySelector('div.music-playlist');
    musicPlaylist.appendChild(newMusic)
    send.onclick=function () {
        let SingleMusic = document.createElement('div');
        SingleMusic.className='single-music';
        let Name = document.createElement('h6');
        Name.innerHTML=inputH6.value;
        SingleMusic.appendChild(Name);
        let audioSing=document.createElement('audio');
        audioSing.preload='auto';
        audioSing.controls=true;
        let source=document.createElement('source');
        source.src='../audio/' + inputMusic.value.split('\\')[2];
        let button=document.createElement('a')
        button.innerHTML='download'
        button.href='../audio/' + inputMusic.value.split('\\')[2];
        button.download=''
        audioSing.appendChild(source);
        SingleMusic.appendChild(audioSing);
        SingleMusic.appendChild(button)
        this.parentElement.parentElement.replaceChild(SingleMusic, this.parentElement.parentElement.lastChild)
            // let divSingle = document.createElement('div');
            // divSingle.className = 'single-music'
            // let h6Name = document.createElement('h6');
            // h6Name.innerHTML = inputH6.value;
            // let audio = document.createElement('audio');
            // audio.preload = 'auto';
            // audio.controls = true;
            // let source = document.createElement('source');
            // source.src = '../audio/' + inputMusic.value.split('\\')[2];
            // audio.appendChild(source);
            // divSingle.appendChild(h6Name);
            // divSingle.appendChild(audio)
            // this.parentElement.parentElement.replaceChild(divSingle, this.parentElement.parentElement.lastChild)


        // let music = musicPlaylist.children[0].cloneNode(true);
        // music.children[0].innerHTML = inputH6.value;
        // music.children[1].children[0].children[0].src = '../audio/' + inputMusic.value.split('\\')[2];
        // this.parentElement.parentElement.replaceChild(music, this.parentElement.parentElement.lastChild)
    }
}