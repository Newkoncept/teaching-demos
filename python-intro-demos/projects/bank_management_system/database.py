import db_handle as dbh


def create_user(account_number, data):
    user_data = dbh.read_data()  # getting the details of the users in the database

    # assigning the new record to the local users variable
    user_data[f"{account_number}"] = data

    # replacing ' with " in order to conform to double quote from json documentation
    str_data = str(user_data).replace("'", '"')

    # Pushing the new changes to the database
    dbh.write_data(str_data)


def read_user(account_number):
    all_users = dbh.read_data()
    return all_users[account_number]


def read_all_users():
    all_users = dbh.read_data()
    return all_users


def update_user(user_data):
    # replacing ' with " in order to conform to double quote from json documentation
    str_data = str(user_data).replace("'", '"')

    # Pushing the new changes to the database
    dbh.write_data(str_data)


def delete_user(account_number):
    all_users = read_all_users()
    all_users.pop(account_number)

    update_user(all_users)


def find_email(email_address):
    all_users = read_all_users()
    email_list = []
    for email in all_users:
        email_list.append(all_users[email][2])

    if email_address in email_list:
        return True
    else:
        return False


def find_user(account_number):
    all_users = dbh.read_data()
    all_account_number = all_users.keys()

    if account_number in all_account_number:
        return all_users[account_number]
    else:
        return False
