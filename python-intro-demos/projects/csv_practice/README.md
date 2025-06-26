# CSV Population Data Processor (Python)

This script reads and processes demographic data from a CSV file containing regional population figures by age range. It parses the CSV using Python’s built-in `csv.DictReader`, skips non-relevant headers, and structures the data into a nested dictionary by region and age range.

The program is built with modularity in mind, using clearly defined functions to extract region names and compute total population per region. It's ideal for practicing data cleaning, transformation, and aggregation from structured files like CSV.

## 🎯 Purpose

This project was created to:

- Practice reading and parsing CSV files using the `csv` module  
- Demonstrate how to clean and structure raw data into nested dictionaries  
- Perform simple aggregations on structured population data  
- Optionally use logic to extract population by age brackets  

## 🧱 How to Run

1. Place your CSV file (`bb.csv`) in the same folder as `csvpractice.py`.  
2. Ensure the CSV is encoded using `iso-8859-1` and follows this header format:  
   ```
   Region, Range, All people
   ```
   The script assumes that the first 4 rows contain metadata and skips them.

3. Run the script with:
   ```
   python csvpractice.py
   ```

4. You should see population totals printed for a specific region (e.g. Scotland).

## 🚀 Features

- Skips header rows using a helper function  
- Reads structured rows using `csv.DictReader`  
- Aggregates total population for a selected region  
- Stores all region data in a nested dictionary  
- Prints both calculated total and reported total from the data  

## 🧩 File Structure

- `csvpractice.py`: Main script with functions:
  - `skip_lines()`: skips metadata lines
  - `get_regions()`: returns available region names
  - `total_population()`: computes total people in a region

- `bb.csv`: External data file (not included here) with demographic breakdown

## 📌 Notes

- Population values with commas are properly cleaned (`'1,234' → 1234`)
- Region names are checked for emptiness to stop processing early
- The script currently focuses on `"Scotland"` as the test case

## 🧠 What You’ll Learn

- How to work with structured data using Python’s `csv` module  
- How to skip non-data lines and preprocess CSV content  
- How to use dictionaries for nested data representation  
- How to filter, clean, and sum values conditionally  
