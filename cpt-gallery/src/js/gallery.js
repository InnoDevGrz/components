

(function ($) {

    $(document).ready(function () {

        $('.product-gallery').justifiedGallery({
            lastRow : 'justify',
            rowHeight : 200,
            maxRowHeight: 400,
            rel : 'justified-gallery',
            margins : '10',
            randomize: true,
            captions: true,


        }).on('jg.complete', function () {
            $(this).find('a').colorbox({
                maxWidth : '100%',
                maxHeight : '100%',
                opacity : 0.8,
                transition : 'elastic',
                current : ''
            });
        });


    });


})(jQuery);

