// PARALLAX AUF slider!!!!!!
window.addEventListener('scroll', function() {
    var images = document.getElementsByClassName('scrolling-image');

    for (var i = 0; i < images.length; i++) {
        var image = images[i];
        var scrollPosition = window.pageYOffset;

        // Anpassung des Margin-Werts basierend auf der Scrollposition
        image.style.marginTop = -scrollPosition / 4 + 'px';
        // Oder, um das Bild nach unten zu verschieben:
        // image.style.marginTop = scrollPosition / 2 + 'px';
    }
});

