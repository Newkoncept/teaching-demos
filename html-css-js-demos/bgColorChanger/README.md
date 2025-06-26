# Keydown Color & Audio Demo (JavaScript Practice)

This project is a simple interactive JavaScript demo built to teach students how to listen for keyboard events, match inputs to a dataset (like letters), and dynamically change the UI based on the result. It also sets the foundation for triggering media playback with audio elements.

## 🧠 Purpose

The purpose of this class demo was to:
- Teach how to listen to keyboard events in JavaScript
- Practice working with arrays and matching logic (`indexOf`)
- Dynamically update page styles based on user interaction
- Introduce the idea of sound feedback with `<audio>` elements

## 🧱 How to Run

1. Ensure `index.html` and `app.js` are in the same directory.
2. Open `index.html` in your browser.
3. Press any alphabet key on your keyboard.
4. The background color of the page will change based on the key pressed.

> **Note**: The audio playback lines are included but commented out. You can enable them and link audio files to add sound responses.

## 🎯 What It Teaches

- JavaScript `keydown` events
- How to use `querySelector`, `addEventListener`, and manipulate the DOM
- How to use arrays (`alphabets[]`, `colors[]`) to map input to behavior
- Basic structure of media elements in HTML (`<audio>`)
- Responsive feedback in the browser using pure JavaScript

## 🚀 Features

- Detects alphabet keypresses (a–z)
- Changes background color to a mapped value
- Fallback color for non-alphabet keys
- Structure in place to extend with sound effects or MP3 playback

## 📌 Notes

- Audio playback is prepared but inactive. Uncomment the lines and supply correct MP3 paths to use it.
- Color mappings are stored in an array and can be edited/extended easily.
- This is a desktop browser demo and not tested for mobile keyboards.

## 🧠 What You’ll Learn

- Event-driven programming basics
- Array lookup and validation
- Visual and audio feedback design
- How code structure enables future feature expansion
