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

// FLIP CARD

const flipCard = document.querySelectorAll(".flip-card");
const flipCardInner = document.querySelectorAll(".flip-card-inner");
const flipCardBack = document.querySelectorAll(".flip-card-back");

let flipped = [false, false, false, false];

function cardFlipCheck(index) {
  if (!flipped[index]) {
    flipCardInner[index].style.transform = "rotateY(180deg)";
    flipped[index] = true;
  } else {
    flipCardInner[index].style.transform = "rotateY(0deg)";
    flipped[index] = false;
  }
}

flipCard.forEach((card, index) => {
  card.addEventListener("click", () => cardFlipCheck(index));
});

flipCard.forEach((card, index) => {
  card.addEventListener("mouseenter", () => cardFlipCheck(index));
});

flipCard.forEach((card, index) => {
  card.addEventListener("mouseleave", () => {
    if (flipped[index]) {
      flipCardInner[index].style.transform = "rotateY(0deg)";
      flipped[index] = false;
    }
  });
});
