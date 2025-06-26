const navbar = document.querySelector(".navbar");
const closeBtn = document.querySelector(".close");
const hamburger = document.querySelector(".hamburger");

hamburger.addEventListener("click", function (e) {
  e.preventDefault();

  navbar.classList.toggle("show");
});

closeBtn.addEventListener("click", function (e) {
  e.preventDefault();

  navbar.classList.toggle("show");
});
