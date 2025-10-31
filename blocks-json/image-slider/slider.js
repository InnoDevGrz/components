function imageSlider() {
    let elms = document.querySelectorAll('.tsc-image-slider .splide');
    for (let i = 0; i < elms.length; i++) {
        new Splide(elms[i], {
            type: 'loop',
            autoplay: true,
            pagination: true,
            perPage: 1,
            perMove: 1,
            duration: 500,
            arrows: true
        }).mount();
    }
}
