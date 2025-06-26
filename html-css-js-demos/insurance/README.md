# Car Insurance Quote Calculator

This is a frontend-only car insurance quote calculator built using **HTML**, **CSS (Materialize)**, and **JavaScript (Classes & Prototypes)**. It allows users to select a car make, model year, and insurance coverage level, then calculates an estimated insurance cost based on those inputs.

This project was developed to help students understand how form-based inputs can be used in real-world scenarios like quote calculators — and how JavaScript classes and logic can power such tools.

## 🎯 Purpose

The goal of this project was to:
- Teach how to work with forms and user input
- Demonstrate price calculation using business logic
- Use classes and prototypes in JavaScript to structure code
- Show real-world usage of DOM manipulation and event handling

## 🧱 How to Run

1. Make sure the following files and folders are in place:
   - `index.html`
   - `js/appClasses.js` (main active logic file)
   - `js/appPrototype.js` (alternate version using prototypes)
   - `js/app.js` (manual version)
   - `css/bootstrap-material-design.min.css`
   - `css/custom.css`
   - `img/spinner.gif`
2. Open `index.html` in a browser.
3. Fill in the form:
   - Select **Make** (American, Asian, European)
   - Select **Year**
   - Choose coverage level (Basic or Complete)
4. Click **Get Quote** to view the estimated price.

## 🚀 Features

- Dynamic year selector (from current year to 20 years back)
- Calculates quote based on:
  - **Make** (price multiplier)
  - **Car year** (depreciation adjustment)
  - **Coverage level** (adds premium)
- Loading spinner before showing results
- Clears quote after a short delay
- Error handling for incomplete fields
- Multiple JS versions (procedural, prototype-based, ES6 class-based)

## 💻 Technologies Used

- HTML & Materialize CSS for layout and styling
- Vanilla JavaScript:
  - Version 1: `app.js` – procedural logic
  - Version 2: `appPrototype.js` – function constructor + prototype
  - Version 3: `appClasses.js` – ES6 classes

## 📌 Notes

- This is a **simulation** — no real insurance data or API integration
- Logic is simplified for teaching purposes
- Only one script should be active at a time (`appClasses.js` is currently used)
- You can switch between logic styles by commenting/uncommenting script tags

## 🧠 What You’ll Learn

- How to build a form-driven JavaScript application
- How to calculate outputs based on multiple user inputs
- How to use ES6 classes and prototype functions in real projects
- How to manage the DOM with JavaScript (inputs, validation, feedback)
- How to structure JavaScript code for readability and reusability

---

This is an excellent starter project for students learning **JavaScript logic structuring**, **frontend data handling**, and **UI feedback patterns**.
