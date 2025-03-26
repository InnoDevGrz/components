function elementInViewport(elem, classToAdd) {

    var window_height = window.innerHeight || document.documentElement.clientHeight;
    var window_top_position = window.pageYOffset;
    var window_bottom_position = (window_top_position + window_height);

    var elemLength = elem.length;
    var i;

    for (i = 0; i < elemLength; ++i) {

        var element_height = elem[i].clientHeight;
        var element_top_position = elem[i].getBoundingClientRect().top + window_top_position;
        var element_bottom_position = (element_top_position + element_height);
        if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
            elem[i].classList.add(classToAdd)

            /* if (!hasClass(elem[i], classToAdd)) {
                 addClass(elem[i], classToAdd);
              }
          } else {
              delClass(elem[i], classToAdd);
        }  */
        }

    }

}

DomReady(() => {

    elementInViewport(document.querySelectorAll('.animate'), 'animated');

});

window.addEventListener("resize", function () {

    elementInViewport(document.querySelectorAll('.animate'), 'animated');

});

window.addEventListener('scroll', function () {

    elementInViewport(document.querySelectorAll('.animate'), 'animated');


}, false);

