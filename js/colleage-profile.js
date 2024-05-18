/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************************!*\
  !*** ./resources/js/colleage-profile.js ***!
  \******************************************/
document.addEventListener('DOMContentLoaded', function () {
  initWelcomeMessageSwiper();
  initAchievementSwiper();
});
var initWelcomeMessageSwiper = function initWelcomeMessageSwiper() {
  var swiperContainer = document.getElementById('welcome_message_swiper');
  var all_page_number = swiperContainer.querySelector('#all_page_number');
  var current_page_number = swiperContainer.querySelector('#current_page_number');
  var swiper = new Swiper(swiperContainer, {
    on: {
      slideChange: function slideChange() {
        if (current_page_number) {
          current_page_number.innerHTML = "".concat(this.activeIndex + 1 > 10 ? '' : '0').concat(this.activeIndex + 1);
        }
      }
    }
  });
  if (all_page_number) {
    var total_page = swiper.slides.length;
    all_page_number.innerHTML = "".concat(total_page > 10 ? '' : '0').concat(total_page);
  }
  var slide_prev_button = swiperContainer.querySelector('#prev-slide-button');
  if (slide_prev_button) {
    slide_prev_button.addEventListener('click', function () {
      swiper.slidePrev();
    });
  }
  var slide_next_button = swiperContainer.querySelector('#next-slide-button');
  if (slide_next_button) {
    slide_next_button.addEventListener('click', function () {
      swiper.slideNext();
    });
  }
};
var initAchievementSwiper = function initAchievementSwiper() {
  var swiperContainer = document.getElementById('achievement_swiper');
  var swiper = new Swiper(swiperContainer, {
    slidesPerGroup: 2,
    slidesPerView: 2,
    spaceBetween: 30,
    pagination: {
      el: '#achievement_swiper_pagination',
      clickable: true
    }
  });
};
/******/ })()
;