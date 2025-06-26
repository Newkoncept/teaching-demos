# FAQ Accordion Toggle (JavaScript)

This project is a simple FAQ accordion-style interface built using HTML, CSS, and vanilla JavaScript. It allows users to expand and collapse individual questions by clicking a toggle button (`+`). When one question is opened, others automatically close — creating a clean and focused user experience.

The project was designed to demonstrate how to use JavaScript for DOM manipulation, event handling, and class-based animations in a practical, real-world layout.

All logic is written in plain JavaScript using event listeners, with CSS transitions for smooth open/close effects.

To run the project, open `index.html` in a browser. Make sure `style.css` and `app.js` are in the same directory. Clicking the `+` icon beside a question will reveal the answer while collapsing any others that were open.

The toggling logic uses a `remove()` function to hide all other answers before showing the one selected, ensuring only one section is visible at a time. The animation is handled by a CSS keyframe scale effect applied to the `.show` class.

This project is ideal for beginners learning JavaScript interactivity and provides a great base for FAQs, collapsible menus, or help pages in modern web apps.
