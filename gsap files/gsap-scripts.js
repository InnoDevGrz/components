gsap.registerPlugin(ScrollTrigger);

document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("load", function () {
        requestAnimationFrame(() => {
            initAnimations();
        });
    }, false);
});


let tl = gsap.timeline();
tl.from('.pageheader .title', {
    x: 500,
    duration: .8,
    ease: "back.inOut(1.7)",
})
    .from('.pageheader .text', {
        y: 500,
        duration: 1,
        ease: "elastic.out(1,0.3)",
    })

function initAnimations() {

    ["p:not(.text):not(.footer-text):not(.contact-infos-mail-phone)", "h2", "h3"].forEach(selector => {
        gsap.utils.toArray(selector).forEach(element => {
            gsap.from(element, {
                y: "30",
                scale: .95,
                opacity: 0,
                duration: .7,
                scrollTrigger: {
                    trigger: element,
                    start: "top 90%",
                    end: "top 70%",
                    ease: "power3.out",
                    scrub: true,
                },
            });
        });
    });

    gsap.utils.toArray('.wp-block-cover__image-background.has-parallax').forEach(element => {
        gsap.from(element, {
            //y: '50%',
            backgroundPositionY: 100,
            scrollTrigger: {
                trigger: element,
                start: 'top 90%',
                end: 'bottom top',
                scrub: 2,
            },

        });
    });

    ["ul:not(.nav-menu):not(.sub-menu) > li:not(.team-member):not(.splide__slide)"].forEach(selector => {
        gsap.utils.toArray(selector).forEach(element => {
            gsap.from(element, {
                y: "30",
                x: "100",
                scale: .95,
                opacity: 0,
                duration: .7,
                scrollTrigger: {
                    trigger: element,
                    start: "top 85%",
                    end: "top 60%",
                    ease: "power3.out",
                    scrub: true,

                },
            });
        });
    });

    gsap.utils.toArray('.wp-block-cover__image-background.has-parallax').forEach(element => {
        gsap.from(element, {
            //y: '50%',
            backgroundPositionY: 100,
            scrollTrigger: {
                trigger: element,
                start: 'top 90%',
                end: 'bottom top',
                scrub: 2,
            },

        });
    });

}


function fadeInLeft(){
    gsap.utils.toArray('.fade-in-left').forEach(element => {
        gsap.from(element, {
            x: '100',
            scrollTrigger: {
                trigger: element,
                start: 'top 85%',
            }


        });
    });
}
function fadeInRight(){
    gsap.utils.toArray('.fade-in-right').forEach(element => {

        gsap.from(element, {
            x: '-100',
            scrollTrigger: {
                trigger: element,
                start: 'top 85%',
            }
        });
    });
}