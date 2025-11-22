import Swiper from 'swiper/bundle';
import 'swiper/swiper-bundle.css';

document.addEventListener("DOMContentLoaded", function() {
    const swiperContainerOurWorks = document.querySelector('.swiper-container.our-works__swiper');

    if( swiperContainerOurWorks !== null) {
        const slides = swiperContainerOurWorks.querySelectorAll('.swiper-slide');
        const startSilde = Math.ceil(slides.length/2-1);
    
        const swiper = new Swiper('.swiper-container.our-works__swiper', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            speed: 400,
    
            effect: 'cards',
    
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
    
            initialSlide: startSilde,
        });
    }
});