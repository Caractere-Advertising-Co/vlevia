/* Home page */

const swiperHero = new Swiper(".swiper-hero", {
  loop: true,
  autoplay: true,
  cssMode: true,
  clickable: true,
  speed: 600,

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

const swiperFrontPage = new Swiper(".swiper-resp", {
  cssMode: true,
  loop: true,

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

const swiperGalerie = new Swiper(".swiper-galerie",{
  cssMode: true,
  slidesPerView: 3,
  spaceBetween: 50, 
  loop: true,

  navigation: {
    nextEl: ".swiper-galerie-button-next",
    prevEl: ".swiper-galerie-button-prev",
  },
  scrollbar: {
    el: ".swiper-scrollbar",
    hide: false ,
  },
});

const swiperGeneration = new Swiper(".swiper-generation",{
  cssMode: true,
  slidesPerView: 1,
  navigation: {
    nextEl: ".swiper-gen-button-next",
    prevEl: ".swiper-gen-button-prev",
  }
})

/* Commun */

const swiperAcco = new Swiper(".swiper-acco", {
  slidesPerView: 1,
  loop: true,

  navigation: {
    nextEl: ".swiper-acco-button-next",
    prevEl: ".swiper-acco-button-prev",
  },
});
