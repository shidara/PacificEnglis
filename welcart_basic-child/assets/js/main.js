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
