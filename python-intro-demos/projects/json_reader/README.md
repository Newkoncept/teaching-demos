# JSON Handling Examples in Python

This folder contains three Python scripts demonstrating how to parse and process JSON data using different sources: from a raw string, from a local file, and from a public API. These examples are perfect for learning how to extract structured information and navigate nested JSON formats in Python.

## 🎯 Purpose

This mini-project was created to:

- Demonstrate how to read JSON from strings, files, and web APIs  
- Practice JSON traversal, especially with nested data  
- Build comfort with Python’s `json` and `urllib` modules  

## 🧱 How to Run

Place all scripts in the same folder. Then run each one using Python 3:

- For reading JSON from a Python string:
  ```
  python json_reader_from_string.py
  ```

- For reading JSON from a file:
  ```
  python json_reader_from_file.py
  ```
  Make sure `comments.json` is in the same folder.

- For reading JSON from an external API:
  ```
  python json_reader_from_api.py
  ```
  Requires an internet connection to fetch live data from the REST API.

## 🚀 Features

### `json_reader_from_string.py`
- Parses inline JSON strings (`json.loads()`)
- Handles both single-object and list-of-object structures
- Accesses nested fields like `number["type"]`

### `json_reader_from_file.py`
- Loads JSON from `comments.json` file using `json.load()`
- Loops through and prints `id`, `name`, `email`, and `body`
- Strips newlines from the comment body

### `json_reader_from_api.py`
- Fetches JSON data from a public API using `urllib.request`
- Adds a custom user-agent header to avoid request rejection
- Parses and prints employee `id`, `name`, and `salary`

## 📌 Notes

- All scripts use `print()` for direct output to the console  
- `json_reader_from_file.py` assumes a local file named `comments.json` with valid JSON structure  
- API responses are parsed from a live endpoint (`https://dummy.restapiexample.com`) and may occasionally change  

## 🧠 What You’ll Learn

- How to parse JSON using `json.loads()` and `json.load()`  
- How to access values from nested JSON objects and arrays  
- How to handle web requests using `urllib` with headers  
- The difference between reading from strings, files, and APIs  
