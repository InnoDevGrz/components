gsap.registerPlugin(ScrollTrigger);

document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("load", function () {
        requestAnimationFrame(() => {
            initAnimations();
        });
    }, false);
});


let tl = gsap.timeline();
tl.from('.is-style-gb-header', {
    right: '-100vw',
    opacity: 0,
    duration: .7,
    ease: "power2.out"
})
    .from('.is-style-header-title', {
        height: '1px',
        rotateX: 180,
        opacity: 0,
        duration: 0.8,
    })
/*   .from('.is-style-header-info', {
       y: -500,
       duration: 1,
       ease: "elastic.out(1, 0.3)"
   })*/

;




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

function zoomIn() {
    gsap.from('.zoom-in', {
        fontSize: '0.1rem',  // Startwert der Animation
        duration: 2,         // Dauer der Animation
        scrollTrigger: {
            trigger: '.zoom-in',   // Element, das die Animation auslöst
            start: "top 80%",      // Startpunkt der Animation
            end: "top 30%",        // Endpunkt der Animation
            scrub: true,           // Animation ist mit Scrollen synchron
            ease: "power3.out",    // Sanfter Übergang
        }
    });
}

function typewriting() {
    document.fonts.ready.then(() => {
        document.querySelectorAll('.is-style-typewriting').forEach(element => {
            let typeChars = SplitText.create(element, {
                type: 'chars, words',
                charsClass: 'char'
            });

            gsap.from(typeChars.chars, {
                autoAlpha: 0,
                ease: "power2.inOut",
                duration: 0.3,
                stagger: {
                    each: 0.05,
                    from: "start"
                },
                scrollTrigger: {
                    trigger: element,
                    start: 'top 95%',
                }
            });
        });
    });
}
function waveChars() {
    document.fonts.ready.then(() => {
        document.querySelectorAll('.is-style-wave-chars').forEach(element => {
            let splitWave = SplitText.create(element, {
                type: 'chars, words',
                charsClass: 'char'
            });

            gsap.from(splitWave.chars, {
                y: 40,
                skewY: 30,
                autoAlpha: 0,
                ease: "power3.out",
                duration: 0.3,
                stagger: {
                    each: 0.03,
                    from: "start"
                },
                scrollTrigger: {
                    trigger: element,
                    start: 'top 75%',
                }
            });
        });
    });
}