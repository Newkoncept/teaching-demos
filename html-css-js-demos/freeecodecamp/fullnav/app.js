const sass = document.querySelector(".sass");
const closeBtn = document.querySelector(".close");
const hamburger = document.querySelector(".hamburger");

hamburger.addEventListener("click", function (e) {
  e.preventDefault();

  sass.classList.toggle("show");
});

closeBtn.addEventListener("click", function (e) {
  e.preventDefault();

  sass.classList.toggle("show");
});
