# MiddlewareDemo

A PHP project that teaches how to simulate middleware behavior using session-based access control. It demonstrates how to protect certain pages from unauthorized access by checking session values before allowing content to load.

This project was created as a teaching example early in the course to explain how session-based logic and route protection work before introducing actual database integration. No database records are used at this stage — the focus is purely on access flow and session handling.

## How to Set It Up

1. Place the `MiddlewareDemo` folder inside your `htdocs` directory (if using XAMPP).
2. Start Apache and MySQL from the XAMPP Control Panel.
3. Open your browser and go to `http://localhost/phpmyadmin`.
4. Run the following SQL to create a placeholder database (optional — not used functionally yet):

    ```sql
    CREATE DATABASE IF NOT EXISTS middleware_auth;
    ```

5. Visit `http://localhost/MiddlewareDemo/login.php` to simulate a login.
6. After "logging in", you’ll be redirected to `index.php` and gain access to protected pages like `register.php`.

## Features

- Middleware-style page protection using sessions
- Protected pages that check if user is logged in
- Manual session simulation in `logic.php`
- Clean layout using includes (`header.php`, `navbar.php`)
- Simulated login using `$_SESSION["username"]`

## What You’ll Learn

- How to simulate middleware in PHP without a framework
- How to protect routes using custom functions and sessions
- How to redirect users based on session state
- How to structure session logic separately for reusability
- The foundation for adding full authentication with a database later in the course
