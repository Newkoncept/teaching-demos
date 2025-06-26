# Email Form Validation & Simulation (Frontend Project)

This is a frontend email sending simulation built using **HTML**, **CSS (Materialize Framework)**, and **JavaScript**. The form mimics a functional email interface with field validation, UI feedback, loading animation, and a mock "send" process.

It was developed as part of a classroom lesson to help students understand real-world form handling, validation, and user feedback — without requiring an actual backend or email service.

## 🎯 Purpose

The goal of this project was to:
- Teach form validation in JavaScript
- Show how to give users visual feedback (success/error)
- Simulate a loading/sending process using timers
- Reinforce good UX practices in form-based interfaces

## 🧱 How to Run

1. Make sure all files and folders are intact:
   - `index.html`
   - `app.js` in `js/`
   - `custom.css` and `materialize.min.css` in `css/`
   - `spinner.gif` and `mail.gif` in `img/`
2. Open `index.html` in a browser.
3. Fill in all form fields correctly to activate the **Send** button.
4. Click **Send** to simulate email sending and view the animation.

## 🚀 Features

- Input field validation on blur:
  - Checks for empty fields
  - Validates email format (basic `@` check)
- Disables Send button until all fields are valid
- Displays loading spinner on send
- Shows a mail animation after "sending"
- Resets form after a delay to simulate success
- Uses Materialize CSS for layout and styling

## 📌 Notes

- This project does **not actually send emails**. It simulates the process visually.
- The email validation is simple (checks for `@`) and can be expanded with regex.
- You can enhance it with real functionality using tools like **EmailJS**, **FormSubmit**, or a backend service.

## 🧠 What You’ll Learn

- How to use event listeners (`blur`, `submit`) for form inputs
- How to dynamically enable/disable buttons based on form state
- How to manipulate classes and styles using JavaScript
- How to simulate delays using `setTimeout`
- How to create user feedback loops in UI/UX

---

This is a great practice project to bridge the gap between static forms and interactive frontend logic — without diving into backend code too soon.
