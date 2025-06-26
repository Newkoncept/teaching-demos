# SimpleBlogAdmin

A beginner-friendly PHP project that uses a pre-designed HTML/CSS template to demonstrate how PHP can be used to manage blog posts and collect newsletter subscriptions.

The goal of this project was to focus on writing and integrating backend PHP logic (not frontend design) into a static template. It includes features for adding, editing, and deleting posts through a simple dashboard, as well as collecting emails via a newsletter form.

## How to Set It Up

1. Place the `SimpleBlogAdmin` folder inside your `htdocs` directory (if you're using XAMPP).
2. Start Apache and MySQL using the XAMPP Control Panel.
3. Open your browser and go to `http://localhost/phpmyadmin`.
4. Run the following SQL commands to create the required database and tables:

    ```sql
    CREATE DATABASE IF NOT EXISTS arch;
    USE arch;

    CREATE TABLE posts (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        body TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );

    CREATE TABLE newsletter (
        id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(255) NOT NULL,
        subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ```

5. Visit `http://localhost/SimpleBlogAdmin/index.php` to view the homepage.
6. Visit `http://localhost/SimpleBlogAdmin/dashboard.php` to access the admin panel and manage posts.


## Features

- Add new blog posts via a form
- Edit or delete existing blog posts from a table view
- Submit emails to a newsletter subscription form
- All content saved to a MySQL database
- Built on top of a pre-designed HTML template to focus on PHP logic
- Basic routing using `$_GET` and `$_POST`
- Uses `mysqli` to connect to the database

## What You’ll Learn

- How to connect PHP to MySQL using `mysqli_connect()`
- How to write and run SQL queries inside PHP
- How to build a basic CRUD (Create, Read, Update, Delete) application
- How to use forms to collect user input and process it with PHP
- How to combine frontend templates with backend logic for real-world projects
