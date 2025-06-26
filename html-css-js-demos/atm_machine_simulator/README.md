# ATM Machine Simulation (Web-Based)

This is a simulated ATM interface built using HTML, CSS, and JavaScript. It allows users to "log in", check their balance, make withdrawals, and navigate through a multi-step flow — all through interactive buttons and stylized UI components.

The project was created to teach basic DOM manipulation, UI state management, and multi-screen logic without the need for backend or actual authentication.

## 🎯 Purpose

This project was used to introduce students to:
- Realistic UI workflows (like banking interfaces)
- JavaScript functions that control screen transitions
- DOM manipulation and content updates
- Handling conditional logic (e.g., insufficient balance)
- Event-driven programming with click handlers

## 🧱 How to Run

1. Make sure all files are in the same folder:
   - `index.html`
   - `style.css`
   - `script.js`
   - Images: `left.png`, `right.png`, `spinner.gif` in a folder named `img/`
2. Open `index.html` in your browser.
3. You’ll be prompted to enter your name before accessing the ATM interface.

## 🚀 Features

- Simulated login using a name prompt
- Welcome screen with options to withdraw or check balance
- Dynamic balance tracking (starting from 100,000)
- Withdrawals from predefined amounts (500 – 40,000)
- “Processing” screen with loading animation (`spinner.gif`)
- Result screen showing updated balance or insufficient funds
- Logout option that resets the app

## 🧠 What You’ll Learn

- How to manage multiple screen sections in a single-page app
- How to toggle visibility using JavaScript
- How to dynamically update DOM elements
- How to handle timeouts and basic UI state transitions
- How to style interfaces and add image-based button cues

## 📌 Notes

- All data is held in the session (no persistence or backend)
- The UI is **not responsive**, but it serves well for teaching logical flow and interactivity
- Ideal for beginner-to-intermediate JavaScript learners
