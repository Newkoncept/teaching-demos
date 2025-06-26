# Dual Timer Counter (Count Up & Count Down)

This is a simple JavaScript-based dual counter that simultaneously counts up from 0 to 60 and counts down from 60 to 0. It's a great class example for teaching timers, intervals, conditional logic, and DOM manipulation using vanilla JavaScript.

## 🎯 Purpose

The project was created to demonstrate:

- Use of `setInterval()` to automate updates over time
- How to manipulate DOM elements using `textContent`
- Conditional updates with upper/lower limits
- Synchronized execution of two time-based operations

## 🧱 How to Run

1. Open `counter.html` in any browser.
2. The page automatically:
   - Starts counting up from 0 to 60
   - Starts counting down from 60 to 0
3. Both counters update every second.
4. A placeholder alert (`alert("yes")`) is prepared to trigger when the counter reaches 60 (though it may need to be moved inside the interval logic to work correctly).

## 🚀 Features

- Two synchronized counters:
  - One counts upward every second
  - One counts downward every second
- Simple, readable output with minimal HTML
- Controlled logic to prevent overcounting or going below 0

## 📌 Notes

- The `alert("yes")` condition is currently checked **outside the interval**, so it will not fire. To fix this, place the condition inside the `cU()` function after the count is updated.
- This project is frontend-only and does not store any data.
- All logic is written inline within the `<script>` tag of the HTML file.

## 🧠 What You’ll Learn

- How to use `setInterval()` to create timed behaviors
- How to update HTML content dynamically with JavaScript
- How to manage global state variables (e.g., `counterr`, `counterrDown`)
- How to add basic control logic to stop counters at limits

---

This project is a great starter exercise for anyone learning about real-time updates and timing in JavaScript.
