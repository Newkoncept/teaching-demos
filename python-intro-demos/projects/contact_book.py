# CONTACT FORM

contacts = {
    "Sample": "+23476457475"
}

def persist():
    fHandle = open("contact.txt", "w")
    fHandle.write(str(contacts))
    fHandle.close()

def main():
    response = int(input("What do you want to do\n 1. Read \n2. Create \n3. Update \n4.Delete\n"))

    if response == 1:
        if len(contacts) < 1:
            print("No contact")
        else:
            for i in contacts:
                print(f"{i}: {contacts[i]}")

    elif response == 2:
        user_name = input("Enter the name")
        num = input("Phone number")
        contacts[user_name] = num
        persist()

    elif response == 3:
        user_name = input("Enter the name")
        if user_name in contacts:
            num = input("Phone number")
            contacts[user_name] = num
            persist()

        else:
            print("No record found")

    elif response == 4:
        user_name = input("Enter the name")
        if user_name in contacts:
            contacts.pop(user_name)
            persist()
        else:
            print("No record found")


main()
