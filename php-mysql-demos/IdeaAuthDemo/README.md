# IdeaAuthDemo

A beginner-level PHP project that demonstrates basic user authentication including signup and login using sessions. It was created to teach core backend concepts such as session handling, user input validation, and database connection.

This project uses a simple structure with reusable components and clear user feedback via query parameters.

## How to Set It Up

1. Place the `IdeaAuthDemo` folder inside your `htdocs` directory (if using XAMPP).
2. Start Apache and MySQL from the XAMPP Control Panel.
3. Open your browser and go to `http://localhost/phpmyadmin`.
4. Run the following SQL to create the database and users table:

    ```sql
    CREATE DATABASE IF NOT EXISTS ideaChecker;
    USE ideaChecker;

    CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(100) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ```

5. Visit `http://localhost/IdeaAuthDemo/signup.php` to register.
6. Then go to `login.php` to log in.

## Features

- User signup with validation and duplicate checks
- Login with error messages for unknown usernames and wrong passwords
- Sessions for logged-in user state
- Includes layout files (`header.php`, `footer.php`, `nav.php`)
- Redirects with error handling via query parameters
- Admin placeholder and port checker included for practice

## What You’ll Learn

- How to store and check user credentials in PHP
- How to hash passwords using `password_hash` (signup)
- How to manage sessions for authentication
- How to build basic feedback mechanisms using query strings
- How to structure a PHP project using partials and helpers
