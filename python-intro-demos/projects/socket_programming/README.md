# Socket Programming in Python – Basic HTTP Client Examples

This folder contains two Python scripts that demonstrate the use of low-level sockets to manually perform HTTP GET requests. These examples help illustrate how a basic web browser operates under the hood by opening a socket, sending a raw HTTP request, and reading the response.

The focus here is on practicing network fundamentals using Python’s `socket` module without relying on higher-level HTTP libraries.

## 🎯 Purpose

This project was created to:

- Show how raw sockets can be used to fetch web content  
- Reinforce how HTTP requests are structured and transmitted  
- Build understanding of client-server communication using TCP/IP  
- Mimic the behavior of a simple text-based browser  

## 🧱 How to Run

1. Make sure you have Python 3 and an internet connection.
2. Open a terminal in the folder containing the scripts.
3. To run either script:

   ```
   python socket_programming.py
   ```

   or

   ```
   python socket_programming_web_browser.py
   ```

4. You should see the contents of `romeo.txt` from one or more remote URLs printed in the terminal.

## 🚀 Script Breakdown

### `socket_programming.py`
- Connects to `data.pr4e.org` on port 80  
- Sends an HTTP GET request for `/romeo.txt`  
- Reads and prints response in 512-byte chunks  

### `socket_programming_web_browser.py`
- Contains **two examples**:
  1. Requests data from `www.py4inf.com/code/romeo.txt`
  2. Requests data from `data.pr4e.org/romeo.txt`
- Each connection is handled in sequence with socket open/send/receive/close pattern

## 📌 Notes

- This approach uses **raw sockets**, meaning headers must be correctly written and encoded
- It uses HTTP 1.0 requests with explicit newline terminations (`\r\n\r\n`)
- No libraries like `requests` or `urllib` are used — the logic is purely socket-based
- This is educational and should not be used for large-scale or secure web access

## 🧠 What You’ll Learn

- How to open and use sockets in Python with `socket.AF_INET` and `SOCK_STREAM`  
- How to send a raw HTTP GET request manually  
- How to read incoming bytes and decode them as text  
- The structure of basic HTTP response handling over TCP  
