import re

with open("emails.txt", "r") as f:
    text = f.read()
    emails = re.findall(r'[\w.-]+@[\w.-]+', text)
    print(emails)
