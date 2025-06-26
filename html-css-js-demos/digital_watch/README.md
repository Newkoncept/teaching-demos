# Live Digital Clock (JavaScript)

This is a simple web-based digital clock built using HTML, inline CSS, and vanilla JavaScript. It displays the current time in hours, minutes, and seconds — updating every second in real time.

This project was created as a class demonstration to help students understand how to use JavaScript with the `Date` object and how to update the DOM dynamically using `setInterval`.

## 🎯 Purpose

The goal of this project is to teach:

- How to retrieve the current system time
- How to use `setInterval()` for real-time updates
- How to modify the content of HTML elements dynamically
- How to use basic styling with classes to visually distinguish content

## 🧱 How to Run

1. Open `sample.html` in any modern web browser.
2. The page displays:
   - A greeting (`WELCOME GBENGA`)
   - A live-updating digital clock showing hours, minutes, and seconds

## 🚀 Features

- Displays current hour, minute, and second using `<span>` elements
- Automatically updates every 1 second
- Color-coded segments:
  - Orange for hours
  - Pink for minutes
  - Blue for seconds
- Uses inline `<style>` block for quick styling
- Fully self-contained (no external files required)

## 📌 Notes

- The greeting is hardcoded; you can replace `"WELCOME USER"` with dynamic user input or a time-based greeting
- Time values are shown in 24-hour format
- For single-digit values (e.g., `09`), consider formatting with leading zeros for clarity (not currently implemented)

## 🧠 What You’ll Learn

- How to use `new Date()` to retrieve current time
- How to manipulate DOM elements using `querySelector` and `textContent`
- How `setInterval()` works for periodic updates
- How to use CSS classes to style individual components

---

This is a great beginner-friendly project to reinforce real-time DOM updates and foundational JavaScript concepts like time handling and class-based styling.
