let remainingMoney = 100000,
  balancePage = document.querySelector(".balance-page"),
  transactionPage = document.querySelector(".transaction-page"),
  welcomePage = document.querySelector(".welcome-page"),
  logoutPage = document.querySelector(".logout-page"),
  processingPage = document.querySelector(".processing-page"),
  resultPage = document.querySelector(".result-page"),
  userName;

//   Function that control the entry of the user
function transact() {
  userName = prompt("What is your name?");
  while (userName === "" || userName === null) {
    userName = prompt("What is your name?");
  }
  userName = userName.toUpperCase();
  document.querySelector(".welcome-text").textContent = `Welcome ${userName}`;
  display(welcomePage, balancePage, transactionPage, logoutPage, processingPage, resultPage);
}

// Function to check the latest balance of the user
function balance() {
  display(balancePage, welcomePage, transactionPage, logoutPage, processingPage, resultPage);

  let balanceText = document.querySelector("#balance_text");
  balanceText = balanceText.textContent = `Your balance is: ${remainingMoney} `;
}

// Function that control the logout functionality.
function logout() {
  location.reload();
}

function withdrawal() {
  display(transactionPage, welcomePage, logoutPage, balancePage, processingPage, resultPage);
}

function deduct(x) {
  let amount = Number(x);
  display(processingPage, welcomePage, logoutPage, balancePage, transactionPage, resultPage);

  setTimeout(function () {
    result(amount);
  }, 2000);
}

function result(x) {
  display(resultPage, processingPage, welcomePage, logoutPage, balancePage, transactionPage);
  let resultText = document.querySelector("#resultText");

  if (x <= remainingMoney) {
    resultText.textContent = "Take your money.......";
    resultText.style.color = "#fff";
    remainingMoney -= x;
  } else {
    resultText.textContent = "Your account is not sufficient for this transaction";
    resultText.style.color = "darkred";
  }
}

/*  Function to display the active setion and hide others
    The first parameter is to set the active page and the others is for the hidden pages
*/
function display(show, hide, hide1, hide2, hide3, hide4) {
  show.style.display = "flex";
  hide.style.display = "none";
  hide1.style.display = "none";
  hide2.style.display = "none";
  hide3.style.display = "none";
  hide4.style.display = "none";
}
