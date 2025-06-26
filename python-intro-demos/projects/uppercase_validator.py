import re

text = input("Enter a string: ")
if re.match(r'^[A-Z]+$', text):
    print("Valid uppercase string")
else:
    print("Invalid")
