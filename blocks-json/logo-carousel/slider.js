import Splide from '@splidejs/splide';

let image_carousel = document.querySelectorAll('.partner-carousel .splide');
for (let i = 0; i < image_carousel.length; i++) {
    new Splide(image_carousel[i], {
        type: 'loop',
        rewind: true,
        autoplay: true,
        interval: 0,
        arrows: false,
        pagination: false,
        perPage: 3,
        perMove: 1,
        speed: 2000,
        gap: '2em',


        breakpoints: {
            600: {
                perPage:1
            },
            768: {
                perPage:2
            },
            992: {
                perPage:3
            },
            1200: {
                perPage:4
            }
        }
    }).mount();
}
