# Local Storage Tweet Saver

This project is a simple frontend app that allows users to type short messages (like tweets), save them to the browser's local storage, and delete them from both the interface and storage. It uses only **HTML**, **CSS (Skeleton + Normalize)**, and **Vanilla JavaScript** — no backend required.

The project was designed to teach students the fundamentals of working with the browser's `localStorage` API, form handling, and DOM manipulation.

## 🧠 Purpose

This project was used to help students learn how to:
- Capture user input from forms
- Store and retrieve data using `localStorage`
- Dynamically update the DOM with JavaScript
- Apply practical CRUD (Create, Read, Delete) operations on the frontend

## 🧱 How to Run

1. Make sure all files are in the correct structure:
```
index.html
└── assets/
├── css/
│ ├── normalize.css
│ ├── skeleton.css
│ └── custom.css
└── js/
└── app.js
```
2. Open `index.html` in a web browser.
3. Type a message in the textarea and click **"Save Tweet"**.
4. Your message appears on the right and is stored in the browser.
5. Click the red **"X"** to delete a tweet from both the display and local storage.

## 🚀 Features

- Save user input to local storage
- Display stored messages on page load
- Delete individual tweets from local storage
- Disable "Save Tweet" button until input is detected
- Clean layout with Skeleton CSS framework

## 🧩 Technologies Used

- HTML5
- CSS3
- [Normalize.css](https://necolas.github.io/normalize.css/)
- [Skeleton CSS](http://getskeleton.com/)
- JavaScript (DOM + localStorage API)

## 📌 Notes

- Tweets are stored in local storage as a JSON array under the key `"tweets"`
- Button is disabled until the user types in the textarea (`blur` event)
- Form resets after each submission
- This app does not use any external library or backend service

## 🧠 What You’ll Learn

- How to use event listeners like `DOMContentLoaded`, `submit`, `blur`, and `click`
- How to interact with the DOM using `querySelector`, `appendChild`, and `classList`
- How to store and retrieve data from `localStorage`
- How to gracefully degrade and progressively enhance a small app

---

✅ A great beginner project for learning how to persist data and interact with the DOM using JavaScript.
