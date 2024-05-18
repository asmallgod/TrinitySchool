document.addEventListener('DOMContentLoaded', () => {
  initWelcomeMessageSwiper()
  initAchievementSwiper()
})

const initWelcomeMessageSwiper = () => {
  const swiperContainer = document.getElementById('welcome_message_swiper')
  const all_page_number = swiperContainer.querySelector('#all_page_number')
  const current_page_number = swiperContainer.querySelector('#current_page_number')

  var swiper = new Swiper(swiperContainer, {
    on: {
      slideChange: function () {
        if (current_page_number) {
          current_page_number.innerHTML = `${this.activeIndex + 1 > 10 ? '' : '0'}${this.activeIndex + 1}`
        }
      },
    },
  })

  if (all_page_number) {
    const total_page = swiper.slides.length
    all_page_number.innerHTML = `${total_page > 10 ? '' : '0'}${total_page}`
  }

  const slide_prev_button = swiperContainer.querySelector('#prev-slide-button')
  if (slide_prev_button) {
    slide_prev_button.addEventListener('click', () => {
      swiper.slidePrev()
    })
  }

  const slide_next_button = swiperContainer.querySelector('#next-slide-button')
  if (slide_next_button) {
    slide_next_button.addEventListener('click', () => {
      swiper.slideNext()
    })
  }
}

const initAchievementSwiper = () => {
  const swiperContainer = document.getElementById('achievement_swiper')

  var swiper = new Swiper(swiperContainer, {
    slidesPerGroup: 2,
    slidesPerView: 2,
    spaceBetween: 30,
    pagination: {
      el: '#achievement_swiper_pagination',
      clickable: true,
    },
  })
}
