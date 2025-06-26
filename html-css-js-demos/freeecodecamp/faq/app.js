const toggleBtns = document.querySelectorAll(".toggle");

toggleBtns.forEach(function (e) {
  e.addEventListener("click", function (a) {
    a.preventDefault();
    const main_parent = e.parentElement.parentElement;
    const body = main_parent.querySelector(".body");
    remove(body);

    body.classList.toggle("show");
  });
});

function remove(present) {
  const bodys = document.querySelectorAll(".body");

  bodys.forEach(function (e) {
    if (e !== present) {
      e.classList.remove("show");
    }
  });
}
