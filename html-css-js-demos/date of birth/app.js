// Variables
const selectorForm = document.querySelector("#selector");
const formTwo = document.querySelector("#formTwo");
const formThree = document.querySelector("#formThree");
const lastestDate = new Date().getFullYear();

// Event Listeners
document.addEventListener("DOMContentLoaded", hideUnwanted);
selectorForm.addEventListener("submit", loadNextContent);
formTwo.addEventListener("submit", processField);

// Functions
function hideUnwanted() {
  formTwo.classList.add("hide");
  formThree.classList.add("hide");
}

function loadNextContent(e) {
  e.preventDefault();

  const selectorFormValue = document.querySelector("#selectorFormValue").value;

  if (selectorFormValue === "age") {
    showForm("age");
  } else {
    showForm("dob");
  }
}

function showForm(value) {
  selectorForm.classList.add("hide");
  if (value === "age") {
    formTwo.classList.remove("hide");
  } else if (value === "dob") {
    formThree.classList.remove("hide");
  }
}

function processField(e) {
  e.preventDefault();
  const ageInput = document.querySelector("#ageInput");

  if (ageInput.value === "") {
    alert("Enter a valid number");
  } else {
    getPersonDetails(ageInput.value);
    ageInput.value = "";
  }
}

function getPersonDetails(value) {
  let result = lastestDate - value;
  document.querySelector(".ageOutput").textContent = value;
  document.querySelector(".dobOutput").textContent = result;
}
