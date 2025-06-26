# Simple Task List (JavaScript Form Practice)

This is a basic to-do/task list app built using only **HTML** and **vanilla JavaScript**. It allows users to type in a task and submit it to a growing list on the page — reinforcing foundational JavaScript skills like form handling, DOM manipulation, and validation.

This project was built as a class exercise to teach how simple interactions can be achieved using raw JS without any libraries or frameworks.

## 🎯 Purpose

This project was created to help students learn how to:

- Capture and validate user input from a form
- Dynamically create and insert elements into the DOM
- Manage simple state visually (without localStorage or a backend)
- Understand event-driven JavaScript using `DOMContentLoaded` and `onsubmit`

## 🧱 How to Run

1. Open the `js.html` file in a browser.
2. Type a task into the input box.
3. Click **Submit** to add it to the list.
4. Tasks will appear immediately below the heading.

> If no value is entered, the app will alert the user to type something.

## 🚀 Features

- Input validation (alerts if the field is empty)
- Appends new tasks as `<li>` items in a `<ul>`
- Clears the input field after successful submission
- No external dependencies — written in plain HTML and JS

## 🧠 What You’ll Learn

- How to use `document.querySelector()` to access elements
- How to add `onsubmit` handlers to forms
- How to prevent form default behavior using `return false`
- How to append elements dynamically using `createElement()` and `append()`

## 📌 Notes

- Tasks are **not stored permanently** — refreshing the page will clear them
- All code is written directly in the HTML file within a `<script>` tag
- Easily extendable with features like delete buttons, localStorage, or completion toggles

---

This is a great beginner project for learning DOM manipulation and the core structure of dynamic web apps using JavaScript.
