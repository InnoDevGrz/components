function DomReady(fn) {
    if (typeof fn !== 'function') {
        return;
    }
    if (document.readyState === 'interactive' || document.readyState === 'complete') {
        return fn();
    }
    document.addEventListener('DOMContentLoaded', fn, false);
}

/* post grid mini-masonry */
function tsc_initMinimasonry() {
    var postMinify = new MiniMasonry({
        container: '.post-grid',
        direction: 'rtl',
        minify: true,
        baseWidth: 275,
        gutter: 30,
        surroundingGutter: false
    });
}



DomReady(() => {
    tsc_initMinimasonry();


});
