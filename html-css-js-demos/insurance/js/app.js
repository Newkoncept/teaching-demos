// Variables
const quoteForm = document.querySelector("#request-quote");

// Event Listeners
document.addEventListener("DOMContentLoaded", displayYears);
quoteForm.addEventListener("submit", showQuote);

// Functions
function displayYears() {
  //   Present and Maximum Date Generator
  const presentYear = new Date().getFullYear();
  const minYear = presentYear - 20;

  const yearDisplay = document.querySelector("#year");

  //   Display the years on the HTML page
  for (let i = presentYear; i >= minYear; i--) {
    let option = document.createElement("option");
    option.value = i;
    option.textContent = i;

    // Append the option to the year selection section
    yearDisplay.appendChild(option);
  }
}

function displayError(message) {
  // Remove previous quote if visible before
  previousResultRemover();
  const errDiv = document.createElement("div");
  errDiv.classList.add("error");

  // Create the error message
  errDiv.innerHTML = `
          <p>${message}</p>
      `;

  // Displaying the error on the page
  quoteForm.insertBefore(errDiv, document.querySelector(".form-group"));

  //   Removing the error after 3 seconds
  setTimeout(function () {
    document.querySelector(".error").remove();
  }, 3000);
}

function displayQuote(price, make, year, level) {
  previousResultRemover();
  const resultDisplayer = document.querySelector("#result");
  const resultDiv = document.createElement("div");
  let makeShower = makeSelectedDisplayer(make);

  resultDiv.innerHTML = `
    <p class="header">Quote Summary</p>
    <p>Make: ${makeShower}</p>
    <p>Year: ${year}</p>
    <p>Level: ${level}</p>
    <p>Price: $ ${price}</p>
  `;

  //   Display the loading image
  const spinner = document.querySelector("#loading img");
  spinner.style.display = "block";

  //   Show the result
  setTimeout(function () {
    spinner.style.display = "none";
    resultDisplayer.appendChild(resultDiv);

    // remove the result
    setTimeout(function () {
      previousResultRemover();
    }, 5000);
  }, 2000);
}

function previousResultRemover() {
  if (document.querySelector("#result div")) {
    document.querySelector("#result div").remove();
  }
}

function makeSelectedDisplayer(make) {
  switch (make) {
    case "1":
      make = "American";
      break;
    case "2":
      make = "Asian";
      break;
    case "3":
      make = "European";
      break;
  }
  return make;
}

function showQuote(e) {
  e.preventDefault();

  //   Get the input from the user
  const make = document.querySelector("#make").value;
  const year = document.querySelector("#year").value;
  const level = document.querySelector("input[name='level']:checked").value;

  if (make === "" || year === "" || level === "") {
    displayError("All Fields are mandatory....");
  } else {
    let price = calculateQuote(make, year, level);

    // Display the output of the quote
    displayQuote(price, make, year, level);
    this.reset();
  }
}

function calculateQuote(make, year, level) {
  let baseAmount = 2000;
  let price;

  //   Calculate the make
  price = calculateMake(baseAmount, make);

  //   Calculate the year
  price = calculateYears(price, year);

  //   Calculate the level
  price = calculateLevel(price, level);

  return price;
}

function calculateMake(baseAmount, make) {
  let price;
  /*
        Percentage of increase based on the type of make
        1. (American)     : 15% = 0.15;
        2. (Asian)        : 5% = 0.05;
        3. (European)     : 35% = 0.35;
    */

  switch (make) {
    case "1":
      price = baseAmount + 0.15 * baseAmount;
      break;
    case "2":
      price = baseAmount + 0.05 * baseAmount;
      break;
    case "3":
      price = baseAmount + 0.35 * baseAmount;
      break;
  }
  return price;
}

function calculateYears(price, year) {
  let yearDifference = calculateYearDifference(year);
  /*
        The price decreases by 3% every year
        3% = 0.03;
    */
  let reducedAmount = yearDifference * 0.03 * price;

  price -= reducedAmount;

  return price;
}

function calculateYearDifference(year) {
  return new Date().getFullYear() - year;
}

function calculateLevel(price, level) {
  /*
          Percentage of increase based on the level selected
         basic: 30% = 0.30;
         complete: 50% = 0.50;
      */

  switch (level) {
    case "basic":
      price = price + 0.3 * price;
      break;
    case "complete":
      price = price + 0.5 * price;
      break;
  }
  return price;
}
