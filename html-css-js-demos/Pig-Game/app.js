/*
GAME RULES:

- The game has 2 players, playing in rounds
- In each turn, a player rolls a dice as many times as he whishes. Each result get added to his ROUND score
- BUT, if the player rolls a 1, all his ROUND score gets lost. After that, it's the next player's turn
- The player can choose to 'Hold', which means that his ROUND score gets added to his GLBAL score. After that, it's the next player's turn
- The first player to reach 100 points on GLOBAL score wins the game

*/

/*
    Variables

                */
const rollBtn = document.querySelector(".btn-roll"),
  holdBtn = document.querySelector(".btn-hold"),
  newGameBtn = document.querySelector(".btn-new");

let dice = document.querySelector(".dice"),
  roundScore = 0,
  globalScore = [0, 0],
  activePlayer = 0;

// Player 1 Details
let p1Name = document.querySelector("#name-0"),
  p1Score = document.querySelector("#score-0"),
  p1Panel = document.querySelector(".player-0-panel"),
  p1CurrentScore = document.querySelector("#current-0");

// Player 2 Details
let p2Name = document.querySelector("#name-1"),
  p2Score = document.querySelector("#score-1"),
  p2Panel = document.querySelector(".player-1-panel"),
  p2CurrentScore = document.querySelector("#current-1");

/*
    Event Listeners
                    */
document.addEventListener("DOMContentLoaded", appInit);
rollBtn.addEventListener("click", rollDice);
holdBtn.addEventListener("click", updateGlobalScore);
newGameBtn.addEventListener("click", resetGame);

/*
    Functions
                */
function appInit() {
  dice.style.display = "none";
  p1CurrentScore.textContent = "0";
  p1Score.textContent = "0";
  p2CurrentScore.textContent = "0";
  p2Score.textContent = "0";
  disabledBtn(false);
}

function rollDice() {
  let diceRoll = Math.floor(Math.random() * 6) + 1;

  if (diceRoll !== 1) {
    showDice(diceRoll);
    updateCurrentScore(curentPlayerSelector(), diceRoll);
  } else {
    currentPlayerUpdater();
  }
}

function showDice(diceRoll) {
  dice.src = `dice-${diceRoll}.png`;
  dice.style.display = "block";
}

function updateCurrentScore(currentPlayer, diceRoll) {
  roundScore += diceRoll;
  currentPlayer.textContent = roundScore;
}

function curentPlayerSelector() {
  let currentPlayer;
  if (activePlayer === 0) {
    currentPlayer = p1CurrentScore;
  } else {
    currentPlayer = p2CurrentScore;
  }
  return currentPlayer;
}

function globalPlayerSelector() {
  let currentPlayer;
  if (activePlayer === 0) {
    currentPlayer = p1Score;
  } else {
    currentPlayer = p2Score;
  }
  return currentPlayer;
}

function currentPlayerUpdater() {
  roundScore = 0;
  p1Panel.classList.toggle("active");
  p2Panel.classList.toggle("active");

  if (activePlayer === 0) {
    p1CurrentScore.textContent = roundScore;
    activePlayer = 1;
  } else {
    p2CurrentScore.textContent = roundScore;
    activePlayer = 0;
  }
}

function updateGlobalScore() {
  let currentPlayer = globalPlayerSelector();
  let currentScore = (globalScore[activePlayer] += roundScore);

  if (currentScore >= 100) {
    if (activePlayer === 0) {
      p1Panel.classList.add("winner");
      p1Name.textContent = "WINNER";
      p1CurrentScore.textContent = 0;
      currentPlayer.textContent = currentScore;
    } else {
      p2Panel.classList.add("winner");
      p2Name.textContent = "WINNER";
      p2CurrentScore.textContent = 0;
      currentPlayer.textContent = currentScore;
    }

    document.querySelector(".active").classList.remove("active");
    disabledBtn(true);
    dice.style.display = "none";
  } else {
    currentPlayer.textContent = currentScore;
    currentPlayerUpdater();
  }
}

function disabledBtn(cond) {
  if (cond === true) {
    rollBtn.disabled = true;
    holdBtn.disabled = true;
    rollBtn.classList.add("disabledBtn");
    holdBtn.classList.add("disabledBtn");
  } else if (cond === false) {
    rollBtn.disabled = false;
    holdBtn.disabled = false;
    rollBtn.classList.remove("disabledBtn");
    holdBtn.classList.remove("disabledBtn");
  }
}

function resetGame() {
  appInit();
  p1Name.textContent = "PLAYER 1";
  p2Name.textContent = "PLAYER 2";
  p1Panel.classList.add("active");
  p2Panel.classList.remove("active");
  (roundScore = 0), (globalScore = [0, 0]), (activePlayer = 0);
  if (document.querySelector(".winner")) {
    document.querySelector(".winner").classList.remove("winner");
  }
}
