const video = document.querySelector("video");
const controls = document.querySelectorAll(".control");

controls.forEach(function (e) {
  e.addEventListener("click", function (a) {
    a.preventDefault();
    remove();
    e.classList.add("active");

    if (e.classList.contains("play")) {
      video.play();
    } else {
      video.pause();
    }
  });
});

function remove() {
  const controls = document.querySelectorAll(".control");
  controls.forEach(function (e) {
    e.classList.remove("active");
  });
}
