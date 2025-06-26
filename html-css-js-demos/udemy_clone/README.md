# Online Course Shopping Cart

This is a frontend e-commerce simulation that allows users to browse and add online courses to a cart, with full cart functionality managed via **JavaScript and localStorage**. The application is styled using Skeleton CSS and includes course listings, price details, and a dynamic cart preview.

This project was designed to teach DOM manipulation, localStorage usage, event handling, and basic UI state management in JavaScript.

## 🎯 Purpose

The main learning objectives of this project are:

- Understanding how to use localStorage to persist data
- Managing cart functionality (add, remove, clear)
- Working with dynamic DOM rendering
- Creating a structured, class-based layout using Skeleton CSS
- Practicing user-driven interactions in real-world UI components

## 🧱 How to Run

1. Ensure all files are in the correct directory structure:
```
index.html
└── css/
├────── normalize.css
├────── skeleton.css
└────── custom.css
└── img/
├────── course1.jpg ... course5.jpg
├────── stars.png
└────── cart.png, logo.jpg
└── js/
└────── app.js
```
2. Open `index.html` in your browser.
3. Click “Add to Cart” on any course to add it to your cart.
4. The cart icon updates to show the number of selected items.
5. Click the **"Clear Cart"** button to empty all items.

## 🚀 Features

- Add-to-cart buttons for each course
- Cart item count indicator
- Cart preview showing image, title, price, and remove option
- LocalStorage integration (cart persists across page reloads)
- Clear Cart button that wipes localStorage and resets cart
- Responsive layout using Skeleton CSS

## 🔧 Technologies Used

- **HTML5**
- **CSS3**
- Skeleton CSS framework
- Normalize.css
- **Vanilla JavaScript**
- DOM manipulation
- `localStorage` for persistent cart
- Event listeners for form interaction

## 📌 Notes

- This project is **frontend-only**; no backend or real e-commerce logic
- Data is not fetched from an API — courses are hardcoded in HTML
- The app does not support cart quantity updates (no “+”/“-” counters)

## 🧠 What You’ll Learn

- How to store, retrieve, and update structured data in localStorage
- How to listen for and handle click events
- How to structure DOM elements dynamically
- How to manage UI state and reset views
- How to build a mini frontend product-based cart

---

This is a great project for learning how localStorage can be used to simulate real-world functionality in e-commerce, and how to write organized JavaScript for interactive UIs.
