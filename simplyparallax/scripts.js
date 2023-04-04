function initParallax(){
    //var cover = document.querySelector('.simplyparallax');
    //var image = cover.querySelector('.wp-block-cover__image-background');
    var image = document.querySelector(' .has-parallax .wp-block-cover__image-background');
    new simpleParallax(image, {
        delay: 0.4,
        scale: 1.5,
        orientatio: 'down',
    });
}
