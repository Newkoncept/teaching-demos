# Weekly Budget Tracker App

A simple web-based application that allows users to set a weekly budget and track expenses against it. Built using **HTML**, **Bootstrap**, and **JavaScript (ES6 Classes)**, this app dynamically updates the budget balance and provides visual alerts as the user spends.

This project was created to teach students how to combine form handling, class-based JavaScript, and DOM manipulation in a real-world budgeting scenario.

## 🎯 Purpose

This app was developed to help students learn:

- How to capture and validate user input via forms
- How to apply class-based JavaScript for UI and logic separation
- How to dynamically update the DOM based on user actions
- How to implement conditional visual feedback based on data (budget color changes)

## 🧱 How to Use

1. Open `index.html` in your browser.
2. When prompted, enter your weekly budget.
3. Use the form to add expenses by name and amount.
4. The app will:
   - Deduct the amount from the remaining budget
   - Display the expense on the list
   - Update the remaining budget dynamically
   - Change alert colors based on how much budget is left

## 🚀 Features

- Prompt-based budget input on page load
- Validates all form fields
- Live updates of:
  - Total budget
  - Remaining balance
  - List of all added expenses
- Color-coded budget status:
  - Green: Healthy
  - Yellow: Warning (half spent)
  - Red: Danger (over three-quarters spent)
- Temporary success/error message display
- Responsive design using Bootstrap classes

## 💻 Technologies Used

- HTML5
- CSS3 + Bootstrap
- Vanilla JavaScript (ES6 Classes)
  - `Budget` class: handles logic
  - `HTMLUI` class: handles UI updates

## 📌 Notes

- This is a **frontend-only** app — no backend or database
- All values are held in session memory (resets on refresh)
- The user is prompted once on load to enter a valid budget

## 🧠 What You’ll Learn

- How to work with `prompt()` and `form` inputs
- How to separate concerns using JavaScript classes
- How to validate input and show real-time error/success messages
- How to update the DOM with dynamic content
- How to manage a simple but useful app workflow

---

This is a great foundational project to help new developers understand how JavaScript powers real user experiences beyond just calculations — it ties logic, state, and UI together meaningfully.
