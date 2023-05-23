function counter() {
    const counters = document.querySelectorAll('.counter');

    const isElementInViewport = (el) => {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    let timers = [];

    const startCounter = (counter, target, index) => {
        let count = 0;
        timers[index] = setInterval(() => {
            if (count >= target) {
                clearInterval(timers[index]);
                return;
            }
            count++;
            counter.innerText = count;
        }, 25);
    };

    const checkCounters = () => {
        counters.forEach((counter, index) => {
            if (isElementInViewport(counter)) {
                const target = +counter.innerText;
                startCounter(counter, target, index);
                counters[index] = null;
            }
        });
    };

    window.addEventListener('scroll', checkCounters);
    checkCounters();
}