console.log("読み込み成功 😸");
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
const mainVisualProgress = document.querySelector(".js-progress span");
console.log("swiper", mainVisualProgress);
var swiper = new Swiper(".js-homeMainVisualSlider", {
  slidesPerView: "auto",
  effect: "fade",
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  on: {
    autoplayTimeLeft(s, time, progress) {
      mainVisualProgress.style.setProperty("--progress", 1 - progress);
    },
  },
});
