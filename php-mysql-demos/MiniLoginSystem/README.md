# MiniLoginSystem

A basic PHP login and registration system that demonstrates how to securely store user information using password hashing and handle authentication using sessions.

This project was built to practice PHP fundamentals around form handling, validation, and connecting to a MySQL database.

## How to Set It Up

1. Place the `MiniLoginSystem` folder inside your `htdocs` directory (if you're using XAMPP).
2. Start Apache and MySQL from the XAMPP Control Panel.
3. Open your browser and go to `http://localhost/phpmyadmin`.
4. Run the following SQL command to create the required database and users table:

    ```sql
    CREATE DATABASE IF NOT EXISTS MiniLoginSystem;
    USE MiniLoginSystem;

    CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(100) NOT NULL UNIQUE,
        firstName VARCHAR(100) NOT NULL,
        password VARCHAR(255) NOT NULL,
        admin BOOLEAN DEFAULT 0,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ```

5. Visit `http://localhost/MiniLoginSystem/register.php` to register a new user.
6. Visit `login.php` to log in.

## Features

- Register new users with validation
- Login system with hashed password verification
- Duplicate username check
- Stores sessions for logged-in users
- Simple redirection with error messages via query strings
- Clear folder and file naming for beginners

## What You’ll Learn

- How to connect PHP to MySQL using `mysqli`
- How to handle and validate form input
- How to hash and verify passwords using `password_hash` and `password_verify`
- How to create and manage user sessions
- How to redirect and show error/success messages with URL query strings
