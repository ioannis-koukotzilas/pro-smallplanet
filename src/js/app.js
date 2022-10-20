// Video

document.querySelectorAll(':is(video-embed) button').forEach((button) =>
  button.addEventListener('click', () => {
    const video = button.previousElementSibling;
    video.src = video.dataset.src;
    const cover = document.querySelector(':is(video-embed) img');
    cover.remove();
  })
);


// Swiper

const swiper = new Swiper('.swiper', {
  
  spaceBetween: 10,
  navigation: {
    nextEl: '.next',
    prevEl: '.prev',
  },


  // Disable preloading of all images
  watchSlidesVisibility: true,
  preloadImages: false,
  lazy: false,
  
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },


 
  freeMode: {
    enabled: true,
  },

  breakpoints: {
    
    640: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
  },
});
