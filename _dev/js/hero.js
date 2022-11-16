const swiper = new Swiper('.heroSlider', {
    loop: true,
    speed: 500,
    allowTouchMove: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    
    //change default css classes 
    wrapperClass: 'heroSlider--wrapper',
    slideClass: 'homeSlider--slide',


    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

