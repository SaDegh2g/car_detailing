import 'animate.css';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import Swiper from 'swiper';
import 'swiper/swiper-bundle.css';

// Initialize Swiper
document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.swiper-container', {
        loop: false,
        slidesPerView: 1.1,
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
            },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});

// Wait for the window to fully load
window.addEventListener("load", function () {
    // Hide the loader
    const loader = document.getElementById("loader");
    loader.style.display = "none";

    // Show the content
    const content = document.getElementById("content");
    content.classList.remove("hidden");
});


