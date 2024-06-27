gsap.registerPlugin(ScrollTrigger);

document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("load", function () {
        requestAnimationFrame(() => {
            initAnimations();
            animatTitle();
        });
    }, false);
});





function initAnimations() {



    // animate double-images

    gsap.utils.toArray('.tsc-block-double-images > figure').forEach(element => {

        gsap.from(element, {
            x: -130,
            duration: 0.7,
            rotationX: -90,
            rotationZ: -10,
            rotationY: 50,
            scrollTrigger: {
                trigger: element,
                start: 'top 90%',
                end: 'bottom top',
                ease: "power3.out",
            },
        });
    });



}


