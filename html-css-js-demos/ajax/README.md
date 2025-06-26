# AJAX vs Fetch API – JSON Data Loader

This project demonstrates how to load external JSON data using both **XMLHttpRequest (AJAX)** and the modern **Fetch API**. When the user clicks the **POST** button, a list of blog-style posts is fetched from a local JSON file and displayed on the page.

This project was built as a hands-on JavaScript lesson to help students compare traditional and modern approaches to working with external data in the browser.

## 🎯 Purpose

The project was created to help learners understand:

- How to retrieve and handle JSON data using JavaScript
- The differences between `XMLHttpRequest` and `fetch()`
- How to dynamically insert fetched content into the DOM
- How asynchronous calls work in frontend web development

## 🧱 How to Run

1. Ensure the following files are structured properly:

```
index.html
app.js
JSON/
└── post.json
```

2. Open `index.html` in a browser.
3. Click the **POST** button to load the JSON data using the Fetch API (by default).
4. Each post will appear in a styled list under the button.

> Note: You can uncomment the `loadPostsAjax()` line in `app.js` to test the XMLHttpRequest version instead.

## 🚀 Features

- Fetches JSON-formatted posts from a local file
- Displays each post as a styled card with a title and body
- Demonstrates both AJAX (`XMLHttpRequest`) and Fetch API usage
- Includes basic error handling with `.catch()`
- Clean HTML and inline CSS styling

## 🧠 What You’ll Learn

- How to use `fetch()` for asynchronous data loading
- How to work with `XMLHttpRequest` (legacy but still useful)
- How to parse JSON and loop through data using `forEach`
- How to update the DOM dynamically with JavaScript
- How to organize code for modular loading logic

## 📌 Notes

- The JSON file (`post.json`) must be served from a local server (e.g. Live Server in VSCode) to avoid CORS issues when using `fetch()`.
- Styling is minimal and included inline for clarity.
- The button currently uses Fetch by default — the AJAX version is commented out.

---

This is a great practice project to learn how to fetch and render external data dynamically — a common task in modern web apps.
