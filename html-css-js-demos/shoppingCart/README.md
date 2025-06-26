# Single Product Shopping Page UI

This is a responsive product showcase page built using **HTML**, **CSS**, and **JavaScript**, designed to simulate a modern e-commerce product display. It features a detailed product description, image, rating, color selection, and a working "Add to Cart" button interface.

This project was created to teach students how to build clean, interactive, and visually structured single-product pages, just like those used on real e-commerce platforms.

## 🎯 Purpose

The goal of this project was to:

- Teach students how product pages are structured and styled
- Demonstrate how color themes and interactions work on e-commerce UIs
- Practice DOM manipulation for styling and layout updates
- Reinforce UI state changes and responsive behavior using JavaScript

## 🧱 How to Use

1. Open `index.html` in a browser.
2. The page displays a product image and description.
3. Click on any of the color swatches to change the theme of the product page.
4. Use the size dropdown to select a size.
5. Click "Add to Cart" (for UI simulation only — no backend or cart storage).

## 🚀 Features

- Product image, name, brand ID, and description
- Star rating display
- Size selection dropdown (`xs`, `sm`, `md`, `lg`)
- Interactive color swatches:
  - Clicking a swatch changes the theme colors of the page
- Sidebar with logo and social media icons
- Responsive nav bar toggle (via `menu.js`)
- Styled with **custom CSS** and **Font Awesome icons**

## 🧩 JavaScript Behavior

- Color swatches (`blue`, `pink`, `yellow`, `grey`) dynamically change:
  - Background of `.shop-page`
  - Background of the `.cart-btn`
  - Sidebar background (`.left`)
- Font size of selected swatch increases for visual feedback
- Navigation toggle logic included (responsive menu not visible in this version)

## 💻 Technologies Used

- HTML5
- CSS3 (custom + Font Awesome)
- JavaScript (DOM manipulation and event listeners)
- No external frameworks used for layout

## 📌 Notes

- There is **no cart storage** or product tracking logic — UI only
- Color swatches and background changes are handled in `app.js`
- Responsive menu logic (`menu.js`) is loaded but not active on current UI
- Assets like `img/logo.png` and `img/skate.png` should be included in `/img/`

## 🧠 What You’ll Learn

- How to create a structured single-product page layout
- How to use JavaScript to manipulate CSS dynamically
- How to create UI interactivity based on color or size options
- How to work with event listeners and class-based styling
- How to simulate e-commerce interfaces in frontend-only projects

---

This project is a perfect frontend learning exercise for understanding e-commerce UI structure, styling logic, and basic interactivity using only client-side code.
