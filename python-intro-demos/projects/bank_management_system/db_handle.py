import json
file_handle = ""


def read_data():
    global file_handle
    try:
        file_handle = open("data/sam.json", "r")
    except FileNotFoundError:
        print("Database connection error: DB File does not exist")
    else:
        # Performing a check for an empty file to prevent JSON error
        # checker = file_handle.read()
        # if len(checker) <= 0:
        #     write_data("{}")
        # checker = file_handle

        # print(len(checker.read()))

        # converting the file data type from string to json format
        json_handle = json.load(file_handle)
        return json_handle
    finally:
        file_handle.close()
# read_data()

def write_data(data):
    global file_handle
    try:
        file_handle = open("data/sam.json", "w")
    except FileNotFoundError:
        print("Database connection error: DB File does not exist")
    else:
        file_handle.write(data)
    finally:
        file_handle.close()
