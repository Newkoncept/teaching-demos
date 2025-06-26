const data = [
  {
    image: "images/image.jpg",
    name: "Susan Smith",
    job: "Web Developer",
    review:
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores recusandae obcaecati officiis iure a quas ducimus unde quo, exrepellat ad amet illo quod soluta? Obcaecati, fugit aliquid harum delectus soluta in veniam distinctio nobis nisi, ex ducimus alias vero.",
  },
  {
    image: "images/image.jpg",
    name: "John Doe",
    job: "Teacher",
    review:
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores recusandae obcaecati officiis iure a quas ducimus unde quo, exrepellat ad amet illo quod soluta? Obcaecati, fugit aliquid harum delectus soluta in veniam distinctio nobis nisi, ex ducimus alias vero.",
  },
  {
    image: "images/image.jpg",
    name: "Smith Susan",
    job: "Full stack",
    review:
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores recusandae obcaecati officiis iure a quas ducimus unde quo, exrepellat ad amet illo quod soluta? Obcaecati, fugit aliquid harum delectus soluta in veniam distinctio nobis nisi, ex ducimus alias vero.",
  },
];

const content = document.querySelector(".content");
const navs = document.querySelectorAll(".nav");
const surpriseBtn = document.querySelector(".surprise");
let currentData = 0;
let data_length = data.length - 1;

document.addEventListener("DOMContentLoaded", render);

navs.forEach(function (e) {
  e.addEventListener("click", function (a) {
    a.preventDefault();

    // Previous Button
    if (e.classList.contains("prev")) {
      if (currentData !== 0) {
        currentData--;
      } else {
        currentData = data_length;
      }
    }

    // Next Button
    else {
      if (currentData === data_length) {
        currentData = 0;
      } else {
        currentData++;
      }
    }

    // Display latest changes
    render();
  });
});

surpriseBtn.addEventListener("click", function (e) {
  e.preventDefault();
  currentData = Math.floor(Math.random() * data.length);
  render();
});

function render() {
  content.innerHTML = `
        <img src=${data[currentData].image} alt="review" class="profile-picture" />
        <h3 class="name">${data[currentData].name}</h3>
        <span class="job">${data[currentData].job}</span>
        <p class="review">${data[currentData].review}</p>
    `;
}
