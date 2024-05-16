// ドロワーメニュー
const headerNavButton = document.getElementsByClassName("Header__navButton")[0];
const navigation = document.getElementsByClassName("Navigation")[0];
// メニューの開閉
headerNavButton.addEventListener("click", () => {
  if (navigation.classList.contains("js-open")) {
    navigation.classList.remove("js-open");
    headerNavButton.ariaExpanded = true;
    headerNavButton.innerText = "MENU";
  } else {
    navigation.classList.add("js-open");
    headerNavButton.ariaExpanded = false;
    headerNavButton.innerText = "CLOSE";
  }
});

//メインビジュアルスライダー
const mainVisualProgress = document.querySelectorAll(".js-progress span");
var speed = 3000;

const _addActive = (index) => {
  mainVisualProgress[index].classList.remove("active");
  mainVisualProgress[index].classList.remove("completed");
  void mainVisualProgress[index].offsetHeight;
  mainVisualProgress[index].classList.add("active");
};

const handleInitSlide = (index) => {
  mainVisualProgress[index].classList.add("active");
};

const handleNextSlideChange = (index) => {
  mainVisualProgress[index].classList.add("active");
  _addActive(index);
  mainVisualProgress[index - 1].classList.add("completed");
};

const handlePrevSlideChange = (index) => {
  [...mainVisualProgress].map((el, idx) => {
    if (idx > index) {
      el.classList.remove("active");
      el.classList.remove("completed");
    }
  });
  _addActive(index);
};

var swiper = new Swiper(".js-homeMainVisualSlider", {
  slidesPerView: "auto",
  effect: "fade",
  autoplay: {
    delay: speed,
    disableOnInteraction: false,
  },
  on: {
    init: (s) => {
      mainVisualProgress[s.activeIndex].classList.add("active");
    },
    slideChange: (s) => {
      handleInitSlide(s.activeIndex);
    },
    slideNextTransitionStart: (s) => {
      handleNextSlideChange(s.activeIndex);
    },
    slidePrevTransitionStart: (s) => {
      // 2週目
      handlePrevSlideChange(s.activeIndex);
    },
  },
});
