def validate_int_input(value):
    try:
        int(value)
    except ValueError:
        print("Invalid input method, expecting digit(s)")
        return False
    else:
        return True


def validate_input_length(value):
    if len(value) <= 0:
        return True
    else:
        return False
