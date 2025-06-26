with open("emails.txt", "r") as infile:
    emails = {line.strip().lower() for line in infile}

with open("cleaned_emails.txt", "w") as outfile:
    for email in sorted(emails):
        outfile.write(email + "\n")
