/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

import { Swiper } from 'swiper'
import { Autoplay, Navigation, Pagination } from 'swiper/modules'

Swiper.use(Autoplay)

var swiperHero = new Swiper("#hero", {
    modules: [Navigation, Pagination],
    autoplay: {
        delay: 3000,
    },
    cssMode: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
    },
    mousewheel: true,
    keyboard: true,
    loop: true,
});

var swiperOnepage = new Swiper("#onepage", {
    modules: [Navigation, Pagination],
    autoplay: {
        delay: 3000,
    },
    slidesPerView: 4,
    spaceBetween: 30,
    cssMode: true,
    mousewheel: true,
    keyboard: true,
    loop: true,
    breakpoints: {
        375: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        430: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        992: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
        // 1024: {
        //     slidesPerView: 5,
        //     spaceBetween: 50,
        // },
    },
});

var swiperPartner = new Swiper("#partner", {
    modules: [Navigation, Pagination],
    autoplay: {
        delay: 3000,
    },
    slidesPerView: 4,
    spaceBetween: 30,
    cssMode: true,
    mousewheel: true,
    keyboard: true,
    loop: true,
    breakpoints: {
        375: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        430: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        992: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
        // 1024: {
        //     slidesPerView: 5,
        //     spaceBetween: 50,
        // },
    },
});
