
// import Swiper JS
import Swiper from 'swiper';

const mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
    autoHeight: true, //enable auto height
    direction: 'horizontal',
    slidesPerView: "auto",
    freeMode: true,
    loop: true,
    followFinger: true,
   
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },

   
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },


})