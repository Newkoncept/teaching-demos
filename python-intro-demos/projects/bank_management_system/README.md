# Bank Account Management System (Python CLI)

This is a console-based bank account management system built in Python. It supports user registration, login, balance checking, deposits, withdrawals, password changes, and account deletion — all stored in a JSON-based mock database.

The system is structured using multiple modules, ensuring a clean separation of concerns for authentication, validation, data handling, and database I/O operations.

## 🎯 Purpose

This project was developed to:

- Demonstrate how to build a modular CLI application in Python  
- Simulate basic banking operations without needing a real backend  
- Teach core programming concepts like input validation, data persistence, and structured error handling  

## 🧱 How to Run

1. Make sure you have Python 3 installed.  
2. Ensure the folder structure is like this:

   ```
   /your-folder
   ├── auth.py
   ├── database.py
   ├── db_handle.py
   ├── validate.py
   ├── main.py
   └── data/
       └── sam.json  ← JSON file to store user data
   ```

3. Run the application using:

   ```
   python main.py
   ```

## 🚀 Features

- 🔐 User Registration & Login  
- 💰 Deposit (Credit) & Withdraw Funds  
- 📊 Check Balance  
- 🔁 Change Password  
- ❌ Delete Account  
- 🧹 JSON file-based mock database  
- 📦 Modular code structure  

## 🧩 File Breakdown

- `main.py` – Entry point that starts the app  
- `auth.py` – Handles user registration, login, and all banking operations  
- `database.py` – Acts as a middle layer between the app logic and file system  
- `db_handle.py` – Manages raw reading/writing to `sam.json`  
- `validate.py` – Contains input and length validation utilities  
- `data/sam.json` – Stores all user data persistently  

## 📌 Notes

- Passwords are entered securely using Python’s `getpass`  
- Account numbers are randomly generated and validated for uniqueness  
- Email addresses must be unique to register  
- Data is saved to `data/sam.json` using stringified JSON  

## 🧠 What You’ll Learn

- Modular Python design for CLI tools  
- Input handling and basic validation  
- Persistent storage using JSON  
- Error handling using `try/except/finally`  
- State-based program flow  
