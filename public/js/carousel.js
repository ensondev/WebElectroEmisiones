const track = document.getElementById('carousel-track');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');

let position = 0;
const moveAmount = 170; // ancho imagen + margen

function getMaxScroll() {
    const containerWidth = document.querySelector('.carousel').offsetWidth;
    const trackWidth = track.scrollWidth;
    return containerWidth - trackWidth; // valor negativo
}

nextBtn.addEventListener('click', () => {
    const maxScroll = getMaxScroll();

    if (position > maxScroll) {
        position -= moveAmount;

        if (position < maxScroll) {
            position = maxScroll;
        }

        track.style.transform = `translateX(${position}px)`;
    }
});

prevBtn.addEventListener('click', () => {
    if (position < 0) {
        position += moveAmount;

        if (position > 0) {
            position = 0;
        }

        track.style.transform = `translateX(${position}px)`;
    }
});