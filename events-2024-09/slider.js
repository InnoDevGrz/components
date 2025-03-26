document.addEventListener( 'DOMContentLoaded', function() {
    var elms = document.getElementsByClassName( 'splide' );

    for ( var i = 0; i < elms.length; i++ ) {
        new Splide( elms[ i ], {
            autoplay: true,
            pagination: true,
            perPage: 1,
            breakpoints: {
                768: {
                    arrows: false,  // Disable arrows below 768px
                }
            }
        }).mount();
    }
});
