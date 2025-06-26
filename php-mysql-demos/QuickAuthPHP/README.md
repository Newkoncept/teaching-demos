# QuickAuthPHP

A simple PHP-based user registration and login system built with core PHP and MySQL.  
This project is designed for beginners and was originally used as a teaching example to demonstrate how authentication works in real web applications.

## How to Set It Up

1. Place the `QuickAuthPHP` folder inside your `htdocs` directory (XAMPP).
2. Start **Apache** and **MySQL** using the XAMPP Control Panel.
3. Open **phpMyAdmin** in your browser.
4. Run the following SQL to create the database and users table:

    ```sql
    CREATE DATABASE IF NOT EXISTS quickauth;
    USE quickauth;

    CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ```

5. Visit `http://localhost/QuickAuthPHP/public/` to start using the system.

## Features

- User registration with name, email, and password
- Password hashing using `password_hash()`
- Login form with validation and verification
- MySQL database integration
- Clear error messages passed via URL parameters

## What You’ll Learn

- How to connect PHP to a MySQL database
- How to securely store and check passwords using hashing
- How to handle basic form validation
- How to organize a simple but real-world PHP project
- How login and registration workflows actually function in a backend system
