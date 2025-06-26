# SimpleAuthSystem

A PHP-based user authentication system built with security best practices and styled with Bootstrap. This project allows users to register and log in, storing their credentials securely using hashed passwords.

It includes full validation and feedback using PHP and URL parameters, and it connects to a MySQL database to manage registered users.

## How to Set It Up

1. Place the `SimpleAuthSystem` folder inside your `htdocs` directory (if you're using XAMPP).
2. Start Apache and MySQL from the XAMPP Control Panel.
3. Open your browser and go to `http://localhost/phpmyadmin`.
4. Run the following SQL to set up the required database and table:

    ```sql
    CREATE DATABASE IF NOT EXISTS securelogin;
    USE securelogin;

    CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(100) NOT NULL,
        lastname VARCHAR(100) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ```

5. Visit `http://localhost/SimpleAuthSystem/register.php` to register a new user.
6. Visit `login.php` to log in.

## Features

- User registration with full validation
- Login with email and password check
- Secure password storage using `password_hash`
- Error and success messages via URL parameters
- Modular layout using reusable PHP components (`head`, `navbar`, `footer`)
- Uses MySQL (`mysqli`) for database interaction

## What You’ll Learn

- How to build a secure login/registration system in PHP
- How to connect and interact with MySQL from PHP
- How to validate and sanitize user input
- How to hash and verify passwords securely
- How to structure a clean PHP project with reusable components
