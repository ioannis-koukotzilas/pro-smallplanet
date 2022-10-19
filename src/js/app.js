document.querySelectorAll(':is(video-embed) button').forEach((button) =>
  button.addEventListener('click', () => {
    const video = button.previousElementSibling;
    video.src = video.dataset.src;
    const cover = document.querySelector(':is(video-embed) img');
    cover.remove();
  })
);



const swiper = new Swiper('.swiper', {
  // Optional parameters



  wrapperClass: 'products',
  slideClass: 'product',
  slidesPerView: 'auto',
  spaceBetween: 10,
  navigation: {
    nextEl: '.next',
    prevEl: '.prev',
  },



  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
  freeMode: {
    enabled: true,
  },
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 640px
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
  },
});
