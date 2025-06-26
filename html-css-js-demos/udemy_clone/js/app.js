// Variables
const coursesList = document.querySelector("#courses-list"),
  shoppingCart = document.querySelector("#shopping-cart tbody"),
  clearCart = document.querySelector("#clear-cart");

// Event Listeners
document.addEventListener("DOMContentLoaded", loadLSItems);
document.addEventListener("DOMContentLoaded", showCartItemNumber);
coursesList.addEventListener("click", addNewCourse);
shoppingCart.addEventListener("click", removeSelectedCourse);
clearCart.addEventListener("click", resetCart);

// Functions
function getItemFromLS() {
  let courses;

  if (localStorage.getItem("courses") === null) {
    courses = [];
  } else {
    courses = JSON.parse(localStorage.getItem("courses"));
  }

  return courses;
}

function showCartItemNumber() {
  let LSCourses = getItemFromLS();
  if (LSCourses.length > 0) {
    const cartLength = document.querySelector(".cart-length");
    cartLength.style.display = "inline";
    cartLength.textContent = LSCourses.length;
  }
}

function loadLSItems() {
  let LSCourses = getItemFromLS();

  LSCourses.forEach(function (LSCourse) {
    addToCart(LSCourse);
  });
}

function addNewCourse(e) {
  e.preventDefault();

  if (e.target.classList.contains("add-to-cart")) {
    let selectedCourse = e.target.parentElement.parentElement;

    //   get the selected course information
    let courseInfo = getCourseInfo(selectedCourse);

    // display the course in the shopping cart
    addToCart(courseInfo);

    // add the course to the local storage
    addToLS(courseInfo);

    displayShoppingCartLength();
  }
}

function getCourseInfo(course) {
  const courseInfo = {
    title: course.querySelector("h4").textContent,
    img: course.querySelector("img").src,
    price: course.querySelector(".price span").textContent,
    id: course.querySelector("a").getAttribute("data-id"),
  };
  return courseInfo;
}

function addToCart(course) {
  const row = document.createElement("tr");
  row.innerHTML = `
    <td>
        <img src='${course.img}' width=100px>
    </td>
    <td>${course.title}</td>
    <td>${course.price}</td>
    <td>
        <a data-id='${course.id}' class="remove" href="#">X</a>
    </td>
  `;
  shoppingCart.appendChild(row);
}

function addToLS(course) {
  // get the courses that as been saved to the local storage
  let LSCourses = getItemFromLS();

  //   push the latest course added to the LS course array
  LSCourses.push(course);

  //   push the array to the local storage
  localStorage.setItem("courses", JSON.stringify(LSCourses));
}

function removeSelectedCourse(e) {
  e.preventDefault();

  if (e.target.classList.contains("remove")) {
    //   getting the parent element of the selected course
    let selectedCourse = e.target.parentElement.parentElement;

    //   getting the ID of the selected course
    let selectedCourseId = selectedCourse.querySelector("a").getAttribute("data-id");

    // remove the selected course from the shopping cart
    removeFromCart(selectedCourse);

    // remove the selected course from the local storage
    removeFromLS(selectedCourseId);

    displayShoppingCartLength();
  }
}

function removeFromCart(course) {
  course.remove();
}

function removeFromLS(courseId) {
  let LSCourses = getItemFromLS();

  LSCourses.forEach(function (LSCourse, index) {
    if (LSCourse.id === courseId) {
      LSCourses.splice(index, 1);
    }
  });
  localStorage.setItem("courses", JSON.stringify(LSCourses));
}

function resetCart(e) {
  e.preventDefault();

  //   set the shopping cart content to empty
  shoppingCart.innerHTML = "";

  //   deleting the courses key from the local storage
  localStorage.removeItem("courses");

  displayShoppingCartLength();
}

function displayShoppingCartLength() {
  let LSCourses = getItemFromLS();
  const cartLength = document.querySelector(".cart-length");
  if (LSCourses.length > 0 && LSCourses !== null) {
    cartLength.style.display = "inline";
    cartLength.textContent = LSCourses.length;
  } else {
    cartLength.style.display = "none";
  }
}
