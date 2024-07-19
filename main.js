document.addEventListener('DOMContentLoaded', function() {
  let menu = document.querySelector('#menu-bars');
  let navbar = document.querySelector('.navbar');
  

  const searchInput = document.getElementById('search-input');
  searchInput.addEventListener('keyup', filterMovies);

  function filterMovies() {
      const searchValue = searchInput.value.toLowerCase();
      const sections = document.querySelectorAll('.swiper-wrapper');

      sections.forEach(section => {
          const movies = section.querySelectorAll('.swiper-slide');
          movies.forEach(movie => {
              const title = movie.querySelector('.content h3').innerText.toLowerCase();
              if (title.includes(searchValue)) {
                  movie.style.display = 'block';
              } else {
                  movie.style.display = 'none'; 
              }
          });
      });
      updateSwipers();
  }

  function updateSwipers() {
    const swipers = document.querySelectorAll('.swiper-container');
    swipers.forEach(swiperContainer => {
      if (swiperContainer.swiper) {
        swiperContainer.swiper.update();
      }
    });
  }
  menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
  };
  new Swiper(".home-slider", {
    spaceBetween: 130,
    centeredSlides: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop: true,
  });

  new Swiper(".anime-slider", {
    slidesPerView: 4,
    spaceBetween: 130,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop: true
  });

  new Swiper(".action-slider", {
    slidesPerView: 4,
    spaceBetween: 130,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop: true
  });

  new Swiper(".child-slider", {
    slidesPerView: 4,
    spaceBetween: 130,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop: true
  });

  new Swiper(".family-slider", {
    slidesPerView: 4,
    spaceBetween: 130,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop: true
  });

  new Swiper(".sport-slider", {
    slidesPerView: 4,
    spaceBetween: 130,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop: true
  });

});




