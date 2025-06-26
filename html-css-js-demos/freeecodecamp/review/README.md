# Review Carousel (JavaScript Project)

This is a JavaScript-based review carousel that displays different user profiles one at a time. Users can cycle through reviews using next/previous buttons or click "Surprise Me" to randomly display one. The project uses vanilla JavaScript, HTML, and CSS with responsive styling.

The purpose of this project is to help students learn how to manipulate the DOM, work with arrays of data, respond to user interaction, and apply conditional logic to update content dynamically.

To run the project, ensure the following files are placed in the same directory: `index.html`, `style.css`, `app.js`, and the image file (`image.jpg`) stored in a subfolder named `images/`. Then open `index.html` in a browser. The review section will update as you navigate using the controls.

The logic uses a global array of review objects (with name, job title, and review text), and dynamically injects content into the `.content` div using JavaScript. The carousel wraps around when reaching the beginning or end. CSS media queries ensure it remains responsive on smaller screens.

This is a great beginner-friendly JavaScript project to learn how to render dynamic data, apply responsive layout, and simulate real-world UI components like sliders or testimonials.
