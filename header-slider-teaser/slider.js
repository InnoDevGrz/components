import Splide from '@splidejs/splide';

let el = document.querySelectorAll('.block-header-slider .splide');
for (let i = 0; i < el.length; i++) {
    new Splide(el[i], {
        type: 'fade',
        rewind: true,
        perPage: 1,
        autoplay: true,
        interval: 7000,
        arrows: false,
        pagination: false
    }).mount();
}

let element = document.querySelectorAll('.image-slider .splide');
for (let i = 0; i < element.length; i++) {
    new Splide(element[i], {
        type: 'fade',
        rewind: true,
        perPage: 1,
        autoplay: true,
        interval: 7000,
        arrows: false,
        pagination: true,
    }).mount();
}

let textslider = document.querySelectorAll('.text-slider .splide');
for (let i = 0; i < textslider.length; i++) {
    new Splide(textslider[i], {
        type: 'loop',
        rewind: true,
        perPage: 1,
        autoplay: true,
        interval: 3500,
        arrows: false,
        pagination: true
    }).mount();
}
