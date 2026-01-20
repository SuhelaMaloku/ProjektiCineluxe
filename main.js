    var swiper = new Swiper(".home", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      pagination:{
        el: ".swiper-pagination",
        clickable: true,
      },
    });

var swiperComing = new Swiper(".coming-container", {
  spaceBetween: 20,
  loop: true,
  autoplay:{
    delay:1500,
    disableOnInteraction: false,
  },
  centeredSlides: true,
  breakpoints:{
    0:{ 
      slidesPerView: 2
     },
    568:{ 
      slidesPerView: 3
    },
    768:{ 
      slidesPerView: 4 
    },
    968:{ 
      slidesPerView: 5 
    },
  },
});
document.addEventListener('DOMContentLoaded', () => {

  document.querySelectorAll('.bookmark-btn').forEach(btn => {

    btn.addEventListener('click', e => {
      e.preventDefault();

      const title = btn.dataset.title;
      const image = btn.dataset.image;

      if (!title || !image) {
        console.log("Missing bookmark data");
        return;
      }

      fetch('handle_action.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: `action=watchlist&title=${encodeURIComponent(title)}&image=${encodeURIComponent(image)}`
      })
      .then(() => {
        btn.classList.toggle('active');
      });
    });

  });

});
