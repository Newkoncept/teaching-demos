# Daily Wage Calculator (JavaScript Project)

This is a simple web-based calculator that determines an employee's daily wages based on total hours worked. The calculator accounts for standard contract hours and additional pay for overtime, including a fixed tip for extra time. It is built using HTML, CSS (Bootstrap), and vanilla JavaScript.

The project was created as a class demonstration to teach students how to combine form input, conditionals, math operations, and DOM manipulation to solve real-world problems.

## 🎯 Purpose

The goal of this project was to help students:

- Practice building interactive forms
- Learn how to validate and process numeric input
- Understand conditional logic in real-world scenarios
- Calculate and display multiple output values dynamically
- Build a clean UI using Bootstrap and custom styles

## 🧱 How to Use

1. Open `index.html` in a web browser.
2. Enter the number of hours an employee worked into the input field.
3. Click the **"Calculate"** button.
4. The app will display:
   - Contract Time Pay (based on up to 4 hours at ₦1000/hr)
   - Extra Hour Pay (including ₦200 tip if above 4 hours)
   - Total Pay (combined value)

## 🚀 Features

- Calculates pay for standard contract hours (₦1000/hour)
- Adds ₦200 tip plus extra pay for overtime hours
- Validates empty input with error feedback
- Displays success or error messages using visual classes
- Automatically resets the form after submission
- Styled using Bootstrap and custom CSS

## 💻 Technologies Used

- **HTML5** – page structure
- **Bootstrap 4** – styling and layout
- **Vanilla JavaScript** – form handling, logic, and DOM updates
- **Custom CSS** – message styling and tweaks

## 📌 Notes

- Default contract time is **4 hours**
- Pay rate is fixed at **₦1000/hour**
- Overtime pay includes both hourly rate and a flat **₦200 tip**
- All calculations happen client-side; no backend required

## 🧠 What You’ll Learn

- How to handle form submission and prevent default behavior
- How to retrieve and process numeric input from users
- How to use conditionals (`if-else`) to guide output
- How to manipulate the DOM to show dynamic values
- How to organize code using functions and event listeners

---

This project is a great example of how JavaScript can be applied to real-life logic and UI behavior in a simple, maintainable structure.
