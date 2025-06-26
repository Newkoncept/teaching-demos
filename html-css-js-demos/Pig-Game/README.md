# Pig Game (2-Player Dice Game)

This is a web-based version of the classic **Pig Dice Game**, developed using HTML, CSS, and vanilla JavaScript. Two players take turns rolling a dice, accumulating points, and choosing whether to risk another roll or hold their score. The first to reach 100 points wins!

This project was built to teach **JavaScript logic**, **event-driven programming**, and **DOM manipulation**, and to reinforce concepts like state management and UI updates.

## 🎯 Purpose

The goal of this project was to:
- Demonstrate how to build an interactive turn-based game
- Practice working with event listeners and game state
- Show how to dynamically update content based on user input
- Reinforce conditional logic and DOM manipulation techniques

## 🧱 How to Play

1. Open `index.html` in your browser.
2. Player 1 starts by clicking **Roll Dice**:
   - If the dice shows anything other than 1, the value is added to their **current score**.
   - If it shows a 1, the player loses their current round score and it's the next player's turn.
3. Players can click **Hold** to add their round score to their global score and end their turn.
4. First player to reach **100 points** wins the game.
5. Click **New Game** to reset.

## 🚀 Features

- Dice rolls with image updates (`dice-1.png` to `dice-6.png`)
- Active player toggling
- Hold functionality to save round score
- Game ends with a **WINNER** message and button disable
- Fully responsive and interactive with minimal CSS

## 🧩 Technologies Used

- **HTML5**: Game structure and layout
- **CSS3**: Styling and layout using Flexbox/Clearfix
- **JavaScript**:
  - DOM selection and manipulation
  - Game state variables and logic
  - Event handling (`click`, `DOMContentLoaded`)

## 📌 Notes

- No external dependencies or libraries — just HTML/CSS/JS
- A single JS file (`app.js`) handles all logic
- Dice images must be named `dice-1.png`, `dice-2.png`, etc., and placed in the root or updated in the code

## 🧠 What You’ll Learn

- How to structure game logic using conditionals and variables
- How to update UI dynamically based on user interaction
- How to manage turn-based flow and transitions
- How to use `querySelector`, `textContent`, and `classList` effectively

---

This project is great for students or new developers looking to build interactive applications and better understand the flow of JavaScript in games.
