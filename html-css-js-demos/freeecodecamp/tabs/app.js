const nav_links = document.querySelectorAll(".nav li");
const details = document.querySelectorAll(".details .content");

document.addEventListener("DOMContentLoaded", function () {
  display_content(0);
});

nav_links.forEach(function (e, q) {
  e.addEventListener("click", function () {
    remove();
    e.classList.add("active");
    display_content(q);
  });
});

function remove() {
  nav_links.forEach(function (e) {
    e.classList.remove("active");
  });
}

function display_content(num) {
  // Hide previous item
  details.forEach(function (e) {
    e.classList.remove("show");
  });

  details[num].classList.add("show");
}
