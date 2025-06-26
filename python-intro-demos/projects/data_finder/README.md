# Text Analysis Toolkit (Python CLI)

This folder contains three Python scripts for basic text processing and word analysis. Each script is designed to help identify word counts, duplicates, and unique word occurrences in a body of text, either from user input or a file. These scripts are excellent practice for working with strings, files, dictionaries, and sets in Python.

## 🎯 Purpose

This project was created to:

- Analyze word frequency and uniqueness in text  
- Practice dictionary-based counting in Python  
- Learn how to process external text files  
- Understand basic set and list operations  

## 🧱 How to Run

1. Place your input file named `data.txt` in the same directory as the scripts. This file will be used by `duplicate_finder.py` and `occurence_finder.py`.  
2. To run each script:

   **Find word frequencies:**
   ```
   python occurence_finder.py
   ```

   **Find and separate duplicates and non-duplicates:**
   ```
   python duplicate_finder.py
   ```

   **Analyze custom sentence from user input:**
   ```
   python text_analysis.py
   ```

## 🚀 Features

### `duplicate_finder.py`
- Reads words from a text file
- Separates words into duplicates and non-duplicates
- Outputs both lists clearly to the console

### `occurence_finder.py`
- Counts frequency of each word (case-insensitive)
- Prints each word with its occurrence count
- Displays total number of unique words found

### `text_analysis.py`
- Accepts sentence input from user
- Splits into words and counts total vs. unique
- Great for on-the-fly analysis without a file

## 📌 Notes

- Input files should be plain `.txt` files with standard formatting  
- All comparisons are case-insensitive (e.g., "Word" and "word" are the same)  
- You can easily extend this to include punctuation removal or stopword filtering  

## 🧠 What You’ll Learn

- How to read and process files with `open()`  
- How to use dictionaries to count items  
- How to split text and normalize it with `.lower()`  
- How to use `set()` for uniqueness checks  
