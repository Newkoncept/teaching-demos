# Python Calculator Scripts

This folder contains two basic calculator programs written in Python:

- `calc_1.py`: A beginner-friendly inline calculator script
- `calc_2.py`: A modular and function-based version with input validation

These scripts are meant to help reinforce core Python concepts such as user input, conditionals, functions, type conversion, and basic error handling.

## 🎯 Purpose

This project was developed to:

- Practice basic arithmetic operations in Python  
- Demonstrate how to evolve procedural code into modular functions  
- Show how to validate input and handle unexpected user errors  

## 🧱 How to Run

1. Make sure you have Python 3 installed.
2. Open your terminal or command line in this project folder.
3. To run the beginner calculator:
   ```
   python calc_1.py
   ```
   You’ll be prompted to enter two numbers and choose an operator.

4. To run the modular version:
   ```
   python calc_2.py
   ```
   You’ll need to import and call `show_result(num1, num2, operator)` directly from a script or Python shell.

## 🚀 Features

### `calc_1.py`
- Straightforward input from user
- Simple inline logic using `if-elif` statements
- Supports `+`, `-`, `*`, `/` operations

### `calc_2.py`
- Modular code with separate `check()`, `calculator()`, and `show_result()` functions
- Input type validation
- Graceful handling of non-digit input
- Clean output formatting with full expression display

## 📌 Notes

- Both scripts assume integer input by default
- `calc_2.py` can be extended easily to support more operators (like `%`, `**`, etc.)
- Error messages in `calc_2.py` guide the user if input is invalid

## 🧠 What You’ll Learn

- How to use input and conditionals for arithmetic logic  
- How to refactor a script into modular, reusable functions  
- How to use `try/except` for basic input validation  
- How to manage user feedback in CLI tools  
