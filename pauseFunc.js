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
