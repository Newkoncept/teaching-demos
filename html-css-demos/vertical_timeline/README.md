# Vertical Timeline Layout (Oga Work Demo)

This project is a vertical timeline-style layout built using HTML and CSS. The design mimics a zigzag pattern of alternating content blocks aligned on either side of a vertical line, with circular markers down the center.

It was created as a practice project to teach layout structuring with Flexbox, absolute positioning, and alternating column content alignment — useful in timelines, resumes, or step-by-step process pages.

## 🎯 Purpose

This project was designed to:
- Practice using **Flexbox** to create columnar layouts
- Demonstrate the use of `order` to control layout flow
- Use **absolute positioning** to place central markers
- Align content in a structured, alternating visual pattern

## 🧱 How to Run

1. Open `s.html` in your browser.
2. You’ll see alternating blocks of text with a central timeline and circular markers.
3. The layout is fixed for desktop and does not scale for responsiveness.

## 🚀 What This Project Covers

- Flexbox layout with alternating content (`order` used per `.row`)
- Use of `.circle` to position timeline markers with `position: absolute`
- Use of CSS utility classes like `.b_left` and `.b_right` for border styling
- Simple HTML structure with minimal nesting for clarity

## 📌 Notes

- This version is **desktop-focused only**.
- The circular markers reference a background image (`/2.jpg`), which must be available at the specified path or replaced.
- Some CSS is commented for experimentation (`border-radius`, `display: none`) — left for further exploration.

## 🧠 What You’ll Learn

- How to create alternating layout patterns using Flexbox
- How to center absolute elements between flexible columns
- How to separate content visually using borders and spacing
- How to build structured, scrollable timelines or info layouts in HTML/CSS
