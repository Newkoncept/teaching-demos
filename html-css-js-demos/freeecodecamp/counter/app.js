const counter = document.querySelector(".counter");
const btns = document.querySelectorAll(".btn");
let count = 0;

btns.forEach(function (e) {
  e.addEventListener("click", function () {
    if (e.id == "decrease") {
      count--;
    } else if (e.id == "reset") {
      count = 0;
    } else {
      count++;
    }

    display_result();
  });
});

/*
    FUNCTIONS
*/

function display_result() {
  if (count === 0) {
    counter.style.color = "#000";
  } else if (count < 0) {
    counter.style.color = "red";
  } else {
    counter.style.color = "green";
  }

  counter.textContent = count;
}
