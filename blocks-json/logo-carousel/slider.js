
function logoCarousel() {
    let logo_carousel = document.querySelectorAll('.logo-carousel .splide');
    for (let i = 0; i < logo_carousel.length; i++) {
        new Splide(logo_carousel[i], {
            type: 'loop',
            rewind: true,
            autoplay: true,
            arrows: false,
            pagination: false,
            perPage: 5,
            perMove: 1,
            interval: 2000,
            duration: 7000,
            speed: 2000,
            gap: '2em',


            breakpoints: {
                600: {
                    perPage: 1
                },
                768: {
                    perPage: 2
                },
                992: {
                    perPage: 3
                },
                1200: {
                    perPage: 4
                }
            }
        }).mount();
    }
}
