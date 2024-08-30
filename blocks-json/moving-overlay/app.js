
function movingOverlay() {

    gsap.to('.tsc-moving-overlay > .overlay',
        {
            width: 0,

            scrollTrigger: {
                trigger: '.tsc-moving-overlay > .overlay',
                start: 'top 80%',
                end: 'bottom center',
                scrub: true,
            }
        }
    )
}