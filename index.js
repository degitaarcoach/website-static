// NAVBAR

const hamburger = document.querySelector(".hamburger");
const close = document.querySelector(".close");
const navList = document.querySelectorAll(".nav__item");

function HideMenu() {
  navList.forEach((navItem) => {
    navItem.classList.add("hide");
  });
  hamburger.classList.remove("hide");
  close.classList.add("hide");
}

function ShowMenu() {
  navList.forEach((navItem) => {
    navItem.classList.remove("hide");
  });
  hamburger.classList.add("hide");
  close.classList.remove("hide");
}

hamburger.addEventListener("click", ShowMenu);
close.addEventListener("click", HideMenu);
// REVIEWS

const pauseBtn = document.querySelector(".pause-button");
const startBtn = document.querySelector(".start-button");
const reviews = document.querySelector(".reviews");

function togglePlayAndPause() {
  reviews.classList.toggle("pause");
  pauseBtn.classList.toggle("hide");
  startBtn.classList.toggle("hide");
}

pauseBtn.addEventListener("click", togglePlayAndPause);
startBtn.addEventListener("click", togglePlayAndPause);

// INSCHRIJVEN

const intro1 = document.querySelector("#");
const intro2 = document.querySelector("#");

const regular1 = document.querySelector("#");
const regular2 = document.querySelector("#");
const regular3 = document.querySelector("#");
