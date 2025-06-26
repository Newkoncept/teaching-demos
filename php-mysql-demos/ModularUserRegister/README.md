# ModularUserRegister

A clean, modular PHP registration system designed to show how real-world form processing and database interaction can be handled using reusable functions, folders, and basic validation.

The goal of this project was to break away from flat PHP files and introduce a structured approach to organizing controllers, database logic, and form input checks.

## How to Set It Up

1. Place the `ModularUserRegister` folder inside your `htdocs` directory (if using XAMPP).
2. Start Apache and MySQL from the XAMPP Control Panel.
3. Open your browser and go to `http://localhost/phpmyadmin`.
4. Run the following SQL to create the required database and table:

    ```sql
    CREATE DATABASE IF NOT EXISTS fullAuthentication;
    USE fullAuthentication;

    CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        firstName VARCHAR(100) NOT NULL,
        lastName VARCHAR(100) NOT NULL,
        username VARCHAR(100) NOT NULL UNIQUE,
        email VARCHAR(255) NOT NULL UNIQUE,
        pwd VARCHAR(255) NOT NULL,
        admin BOOLEAN DEFAULT 0,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ```

5. Visit `http://localhost/ModularUserRegister/index.php` to test the registration form.

6. ⚠️ If you're not using the `localhost/ModularUserRegister` path (for example, you renamed the folder or are using a virtual host), be sure to update this line in `path.php`:

    ```php
    define("BASE_URL", "http://localhost/php/ModularUserRegister");
    ```

    Replace it with the correct base URL for your setup.

## Features

- Full name, username, email, and password registration
- Form validation with regex, email format, and matching passwords
- Secure password hashing using `password_hash`
- Database checks to prevent duplicate usernames or emails
- Reusable functions for `select`, `insert`, `update`, and `delete`
- Structured MVC-style directory: `controller`, `database`, `assets`

## What You’ll Learn

- How to organize PHP projects using folders and reusable code
- How to build a secure and validated registration form
- How to use prepared statements and parameter binding in PHP
- How to return error and success messages using query strings
- How to structure clean, maintainable backend code in PHP
