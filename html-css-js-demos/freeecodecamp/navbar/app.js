const navbar = document.querySelector(".navbar");
const hamburger = document.querySelector(".hamburger");

hamburger.addEventListener("click", function (e) {
  e.preventDefault();

  navbar.classList.toggle("show");
});
