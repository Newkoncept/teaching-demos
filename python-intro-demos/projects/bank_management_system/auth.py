import random
import database as db
import validate
from getpass import getpass

user_account_number = 0


def init():
    print("****************************************")
    print("Welcome to MY BANK")
    program_init = input("Do you have an account with us: \n1: Yes\n2: No\n")
    validate_input = validate.validate_int_input(program_init)

    if validate_input:
        program_init = int(program_init)

        if program_init == 1:
            login()

        elif program_init == 2:
            register()

        else:
            init()
    else:
        init()


def login():
    print("******************")
    print("LOGIN PAGE")
    print("******************")

    account_number = input("Enter your Account Number\n")
    validated_input = validate.validate_int_input(account_number)

    if validated_input:
        user_record = db.find_user(account_number)

        if user_record:
            password = getpass("Enter your password\n")
            db_password = user_record[-1]

            # Checking the password to confirm that the inserted password is correct with each other
            if password == db_password:
                global user_account_number
                user_account_number = str(account_number)
                bank_operations()
            else:
                print("Incorrect Password")
                login()
        else:
            print("****************************************")
            print("Account number not found")
            final_greeting()
            print("****************************************")
    else:
        init()


def register():
    print("******************")
    print("REGISTER PAGE")
    print("******************")

    first_name = input("What is your first name?\n")
    last_name = input("What is your last name?\n")
    email = input("What is your email address?\n")
    password = getpass("Enter your preferred password\n")

    # retrieving a new account number for the user
    new_account = generate_account_number()

    # checking for empty field
    first_name_checker = validate.validate_input_length(first_name)
    last_name_checker = validate.validate_input_length(last_name)
    email_len_checker = validate.validate_input_length(email)
    password_checker = validate.validate_input_length(password)

    if first_name_checker | last_name_checker | email_len_checker | password_checker:
        print("***************************")
        print("All fields are mandatory")
        register()
    else:
        # Checking that the email is unique
        email_checker = db.find_email(email)

        if email_checker:
            print("***************************")
            print("Email exists")
            register()
        else:
            # Inserting the newly created record to the database
            user_data = [first_name, last_name, email, 0, password]

            db.create_user(new_account, user_data)

            print("****************************************")
            print("Account created successfully")
            print(f"Your account number is: {new_account}")
            print("****************************************")

            login()


def generate_account_number():
    # generating a new account number
    generated_account = random.randrange(1111111111, 9999999999)

    account_checker = db.find_user(generated_account)

    # regenerating another account if the previous one exists already
    while account_checker:
        generated_account = random.randrange(1111111111, 9999999999)

    return generated_account


def bank_operations():
    print("****************************************")
    # print(f"Welcome {first_name}")
    operation = input('''What do you want to do today
    1. Check Balance
    2. Withdraw funds
    3. Credit account
    4. Change password
    5. Logout
    6. Delete Account
    7. Exit application
    ''')

    validated_input = validate.validate_int_input(operation)
    if validated_input:
        operation = int(operation)

        if operation == 1:
            print(f"Your balance is: {check_balance()}")
            bank_operations()

        elif operation == 2:
            withdraw_amount()
            bank_operations()

        elif operation == 3:
            credit_account()
            bank_operations()

        elif operation == 4:
            change_password()

        elif operation == 5:
            logout()

        elif operation == 6:
            delete_account()
            exit()

        elif operation == 7:
            final_greeting()
            exit()

        else:
            bank_operations()

    else:
        bank_operations()


def check_balance():
    user_balance = db.read_user(user_account_number)[-2]
    return user_balance


def change_password():
    new_password = getpass("Enter a new password")
    confirm_password = getpass("Confirm the password")

    if new_password == confirm_password:
        all_users_details = db.read_all_users()

        all_users_details[user_account_number][-1] = new_password

        db.update_user(all_users_details)

        print("****************************************")
        print("Password updated")
        print("****************************************")
        logout()

    else:
        print("Password does not match")
        change_password()


def credit_account():
    amount = input("How much do you want to credit yourself? \n")
    validate_input = validate.validate_int_input(amount)

    if validate_input:
        all_users_details = db.read_all_users()

        all_users_details[user_account_number][-2] += int(amount)

        db.update_user(all_users_details)

        print("****************************************")
        print("Transaction successful")
        print("****************************************")
    else:
        credit_account()


def withdraw_amount():
    amount_to_withdraw = input("How much do you want to withdraw? \n")
    validate_int = validate.validate_int_input(amount_to_withdraw)

    if validate_int:
        balance = check_balance()
        amount_to_withdraw = int(amount_to_withdraw)

        if balance >= amount_to_withdraw:
            all_users_details = db.read_all_users()

            all_users_details[user_account_number][-2] -= int(amount_to_withdraw)

            db.update_user(all_users_details)
            print("******************************")
            print("Take your cash")
            print("******************************")
        else:
            print("Insufficient Funds")

    else:
        withdraw_amount()


def delete_account():
    confirmation = input("Are you sure\n1. Yes\n2. No\n")
    validate_input = validate.validate_int_input(confirmation)

    if validate_input:
        confirmation = int(confirmation)
        if confirmation == 1:
            db.delete_user(user_account_number)
            print("**************************")
            print("Account Deleted Successfully")
            final_greeting()
            print("**************************")
        else:
            bank_operations()
    else:
        bank_operations()


def logout():
    login()


def final_greeting():
    print("Do have a nice day")
